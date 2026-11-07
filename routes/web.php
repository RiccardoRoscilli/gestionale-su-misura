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

// Legal pages
Route::get('/privacy', [LegalController::class, 'privacy'])->name('privacy');
Route::get('/cookies', [LegalController::class, 'cookies'])->name('cookies');
Route::get('/terms', [LegalController::class, 'terms'])->name('terms');
