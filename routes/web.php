<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\LegalController;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::post('/leads', [LeadController::class, 'store'])
    ->middleware('throttle:5,10') // max 5 invii ogni 10 minuti per IP
    ->name('leads.store');

// Demo pages
Route::get('/demo/pulizie', function () {
    return view('demo.pulizie');
})->name('demo.pulizie');

Route::get('/demo/task', function () {
    return view('demo.task');
})->name('demo.task');

Route::get('/demo/menu', function () {
    return view('demo.menu');
})->name('demo.menu');

Route::get('/demo/bandi', function () {
    return view('demo.bandi');
})->name('demo.bandi');

Route::get('/demo/officina', function () {
    return view('demo.officina');
})->name('demo.officina');

// Clic verso una demo, con la provenienza del visitatore (vedi components/attribution).
Route::post('/demo/track', function (\Illuminate\Http\Request $request) {
    $data = $request->validate([
        'demo' => 'required|string|max:100',
        'page' => 'nullable|string|max:100',
        'utm_source' => 'nullable|string|max:100',
        'utm_medium' => 'nullable|string|max:100',
        'utm_campaign' => 'nullable|string|max:100',
    ]);
    \App\Models\DemoAccess::create($data + [
        'demo_name' => $data['demo'],
        'ip_address' => $request->ip(),
        'user_agent' => mb_substr((string) $request->userAgent(), 0, 500),
        'accessed_at' => now(),
    ]);
    return response()->noContent();
})->middleware('throttle:30,1')->name('demo.track');

// Legal pages
Route::get('/privacy', [LegalController::class, 'privacy'])->name('privacy');
Route::get('/cookies', [LegalController::class, 'cookies'])->name('cookies');
Route::get('/terms', [LegalController::class, 'terms'])->name('terms');

// Pagine per settore (contenuti in config/settori.php).
// Il file è letto direttamente e non tramite config(): così una cache di
// configurazione non ancora rigenerata dopo un deploy non blocca il sito.
$settori = require base_path('config/settori.php');
foreach ($settori as $slug => $page) {
    Route::get('/' . $slug, fn () => view('settori.show', ['page' => $page]))
        ->name('settori.' . $slug);
}

// Sitemap per i motori di ricerca
Route::get('/sitemap.xml', function () use ($settori) {
    $base = rtrim(config('app.url'), '/');
    $pages = [
        ['/', '1.0', 'weekly'],
        ['/demo/pulizie', '0.8', 'monthly'],
        ['/demo/task', '0.8', 'monthly'],
        ['/demo/menu', '0.8', 'monthly'],
        ['/demo/bandi', '0.8', 'monthly'],
        ['/demo/officina', '0.8', 'monthly'],
        ...array_map(fn ($slug) => ['/' . $slug, '0.9', 'monthly'], array_keys($settori)),
        ['/privacy', '0.2', 'yearly'],
        ['/cookies', '0.2', 'yearly'],
        ['/terms', '0.2', 'yearly'],
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n"
        . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ($pages as [$path, $priority, $freq]) {
        $xml .= "  <url><loc>{$base}{$path}</loc><changefreq>{$freq}</changefreq><priority>{$priority}</priority></url>\n";
    }
    $xml .= '</urlset>' . "\n";

    return response($xml, 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
})->name('sitemap');
