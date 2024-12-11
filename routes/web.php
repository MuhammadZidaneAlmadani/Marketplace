<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsAdmin;

// -----------------------------------------
// RUTE UTAMA PENGUNJUNG
// -----------------------------------------

// Halaman utama
Route::get('/dashboard', [DashboardController::class, 'index'])->name('guest.dashboard');

// Rute untuk event
Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('events.index');
    Route::get('/{event}', [EventController::class, 'show'])->name('events.show');
});

// Rute untuk market
Route::prefix('markets')->group(function () {
    Route::get('/', [MarketController::class, 'index'])->name('markets.index');
    Route::get('/{market}', [MarketController::class, 'show'])->name('markets.show');
});

// Rute untuk news
Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
    Route::get('/{news}', [NewsController::class, 'show'])->name('news.show');
});

// Informasi dan hubungi kami
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');
Route::get('/hubungi', [ContactController::class, 'index'])->name('contact.index');
Route::post('/hubungi', [ContactController::class, 'submit'])->name('contact.submit');

// -----------------------------------------
// RUTE OTENTIKASI
// -----------------------------------------

Route::middleware('guest')->group(function () {
    // Halaman login
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// -----------------------------------------
// RUTE ADMIN (Hanya untuk Admin)
// -----------------------------------------

Route::middleware(['auth', IsAdmin::class])->prefix('admin')->group(function () {
    // Dashboard admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Market management
    Route::prefix('markets')->name('markets.admin.')->group(function () {
        Route::get('/', [MarketController::class, 'index'])->name('index');
        Route::get('/create', [MarketController::class, 'create'])->name('create');
        Route::post('/', [MarketController::class, 'store'])->name('store');
        Route::get('/{market}', [MarketController::class, 'show'])->name('show');
        Route::get('/{market}/edit', [MarketController::class, 'edit'])->name('edit');
        Route::put('/{market}', [MarketController::class, 'update'])->name('update');
        Route::delete('/{market}', [MarketController::class, 'destroy'])->name('destroy');
    });

    // News management
    Route::prefix('news')->name('news.admin.')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/create', [NewsController::class, 'create'])->name('create');
        Route::post('/', [NewsController::class, 'store'])->name('store');
        Route::get('/{news}', [NewsController::class, 'show'])->name('show');
        Route::get('/{news}/edit', [NewsController::class, 'edit'])->name('edit');
        Route::put('/{news}', [NewsController::class, 'update'])->name('update');
        Route::delete('/{news}', [NewsController::class, 'destroy'])->name('destroy');
    });

    // Event management
    Route::prefix('events')->name('events.admin.')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('index');
        Route::get('/create', [EventController::class, 'create'])->name('create');
        Route::post('/', [EventController::class, 'store'])->name('store');
        Route::get('/{event}', [EventController::class, 'show'])->name('show');
        Route::get('/{event}/edit', [EventController::class, 'edit'])->name('edit');
        Route::put('/{event}', [EventController::class, 'update'])->name('update');
        Route::delete('/{event}', [EventController::class, 'destroy'])->name('destroy');
    });
});

// -----------------------------------------
// RESOURCE ROUTES
// -----------------------------------------

Route::resource('markets', MarketController::class)->except(['create', 'edit']);
Route::resource('news', NewsController::class)->except(['create', 'edit']);
Route::resource('events', EventController::class)->except(['create', 'edit']);

// -----------------------------------------
// RUTE LAINNYA
// -----------------------------------------

Route::get('/layanan', [NewsController::class, 'index'])->name('layanan');
Route::get('/hubungi-kami', [ContactController::class, 'index'])->name('hubungi-kami');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
