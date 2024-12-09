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
<<<<<<< HEAD
use App\Http\Middleware\IsAdmin;
=======
use App\Http\Controllers\PasarController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\HubungiKamiController;
use App\Models\Contact;
use App\Models\Market;
use App\Models\News;
>>>>>>> 68ecc9d7f001e0164c3e04b7e50d7b4fdd0ec7ab

// -----------------------------------------
// RUTE PENGUNJUNG (Tanpa Login)
// -----------------------------------------

// Halaman utama pengunjung
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk acara (hanya index dan show)
Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('events.index');
    Route::get('/{event}', [EventController::class, 'show'])->name('events.show');
});

// Rute untuk market (hanya index dan show)
Route::prefix('markets')->group(function () {
    Route::get('/', [MarketController::class, 'index'])->name('markets.index');
    Route::get('/{market}', [MarketController::class, 'show'])->name('markets.show');
});

// Rute untuk news (hanya index dan show)
Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
    Route::get('/{news}', [NewsController::class, 'show'])->name('news.show');
});

// Rute informasi dan contact us
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');
Route::get('/hubungi', [ContactController::class, 'index'])->name('contact.index');
Route::post('/hubungi', [ContactController::class, 'submit'])->name('contact.submit');

// -----------------------------------------
// RUTE OTENTIKASI
// -----------------------------------------
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// -----------------------------------------
// RUTE ADMIN (Memerlukan Login dan Admin Role)
// -----------------------------------------
Route::middleware(['auth', IsAdmin::class])->prefix('admin')->group(function () {
    // Halaman dashboard admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Rute untuk mengelola pasar
    Route::prefix('markets')->name('markets.admin.')->group(function () {
        Route::get('/', [MarketController::class, 'index'])->name('index');
        Route::get('/create', [MarketController::class, 'create'])->name('create');
        Route::post('/', [MarketController::class, 'store'])->name('store');
        Route::get('/{market}', [MarketController::class, 'show'])->name('show');
        Route::get('/{market}/edit', [MarketController::class, 'edit'])->name('edit');
        Route::put('/{market}', [MarketController::class, 'update'])->name('update');
        Route::delete('/{market}', [MarketController::class, 'destroy'])->name('destroy');
    });

    // Rute untuk mengelola berita
    Route::prefix('news')->name('news.admin.')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/create', [NewsController::class, 'create'])->name('create');
        Route::post('/', [NewsController::class, 'store'])->name('store');
        Route::get('/{news}', [NewsController::class, 'show'])->name('show');
        Route::get('/{news}/edit', [NewsController::class, 'edit'])->name('edit');
        Route::put('/{news}', [NewsController::class, 'update'])->name('update');
        Route::delete('/{news}', [NewsController::class, 'destroy'])->name('destroy');
    });

    // Rute untuk mengelola event
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
<<<<<<< HEAD
=======

// Resource routes untuk Market, News, dan Event
Route::resource('markets', MarketController::class);
Route::resource('news', NewsController::class);
Route::resource('events', EventController::class);

// Rute Informasi
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');
Route::get('/informasi/news', [InformasiController::class, 'news'])->name('news');
Route::get('/informasi/event', [InformasiController::class, 'event'])->name('event');

// Route untuk halaman lain
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/markets', [MarketController::class, 'index'])->name('market');
Route::get('/layanan', [NewsController::class, 'index'])->name('layanan');
Route::get('/hubungi-kami', [ContactController::class, 'index'])->name('hubungi-kami');

// Contact Us
Route::get('/hubungi', [ContactController::class, 'index'])->name('contact.index');
Route::post('/hubungi', [ContactController::class, 'submit'])->name('contact.submit');
>>>>>>> 68ecc9d7f001e0164c3e04b7e50d7b4fdd0ec7ab
