<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect()->route('login');
});

// Rute Otentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Resource routes untuk Market, News, dan Event
Route::resource('markets', MarketController::class);
Route::resource('news', NewsController::class);
Route::resource('events', EventController::class); // Resource route untuk Event

// Rute Informasi
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');
