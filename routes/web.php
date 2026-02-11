<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\LegalController;

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');

// Demo pages
Route::get('/demo/pulizie', function () {
    return view('demo.pulizie');
})->name('demo.pulizie');

// Legal pages
Route::get('/privacy', [LegalController::class, 'privacy'])->name('privacy');
Route::get('/cookies', [LegalController::class, 'cookies'])->name('cookies');
Route::get('/terms', [LegalController::class, 'terms'])->name('terms');
