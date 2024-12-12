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
use App\Http\Controllers\TerasPasarController;
=======
>>>>>>> ddaef81cabd30f29ff494ed02f43af3a58565c4b
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

<<<<<<< HEAD
    // Rute untuk mengelola pasar (admin)
=======
    // Market management
>>>>>>> ddaef81cabd30f29ff494ed02f43af3a58565c4b
    Route::prefix('markets')->name('markets.admin.')->group(function () {
        Route::get('/', [MarketController::class, 'index'])->name('index'); // Menampilkan daftar pasar
        Route::get('/create', [MarketController::class, 'create'])->name('create'); // Menampilkan form tambah pasar
        Route::post('/', [MarketController::class, 'store'])->name('store'); // Menyimpan pasar baru
        Route::get('/{market}', [MarketController::class, 'show'])->name('show'); // Menampilkan detail pasar
        Route::get('/{market}/edit', [MarketController::class, 'edit'])->name('edit'); // Menampilkan form edit pasar
        Route::put('/{market}', [MarketController::class, 'update'])->name('update'); // Memperbarui data pasar
        Route::delete('/{market}', [MarketController::class, 'destroy'])->name('destroy'); // Menghapus pasar
    });

    // News management
    Route::prefix('news')->name('news.admin.')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/create', [NewsController::class, 'create'])->name('create');
        Route::post('/', [NewsController::class, 'store'])->name('store');
        Route::get('/{news}/edit', [NewsController::class, 'edit'])->name('edit');
        Route::put('/{news}', [NewsController::class, 'update'])->name('update');
        Route::delete('/{news}', [NewsController::class, 'destroy'])->name('destroy');
        Route::get('/{news}', [NewsController::class, 'show'])->name('show');
    });

<<<<<<< HEAD
    // Rute untuk mengelola acara
=======
    // Event management
>>>>>>> ddaef81cabd30f29ff494ed02f43af3a58565c4b
    Route::prefix('events')->name('events.admin.')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('index');
        Route::get('/create', [EventController::class, 'create'])->name('create');
        Route::post('/', [EventController::class, 'store'])->name('store');
        Route::get('/{event}/edit', [EventController::class, 'edit'])->name('edit');
        Route::put('/{event}', [EventController::class, 'update'])->name('update');
        Route::delete('/{event}', [EventController::class, 'destroy'])->name('destroy');
        Route::get('/{event}', [EventController::class, 'show'])->name('show');
    });

    Route::prefix('admin/teras-pasar')->name('teras-pasar.admin.')->middleware(['auth', \App\Http\Middleware\IsAdmin::class])->group(function () {
        Route::get('/', [TerasPasarController::class, 'index'])->name('index');
        Route::get('/create', [TerasPasarController::class, 'create'])->name('create');
        Route::post('/', [TerasPasarController::class, 'store'])->name('store');
        Route::get('/{terasPasar}', [TerasPasarController::class, 'show'])->name('show');
        Route::get('/{terasPasar}/edit', [TerasPasarController::class, 'edit'])->name('edit');
        Route::put('/{terasPasar}', [TerasPasarController::class, 'update'])->name('update');
        Route::delete('/{terasPasar}', [TerasPasarController::class, 'destroy'])->name('destroy');
    });
});
<<<<<<< HEAD
=======

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
>>>>>>> ddaef81cabd30f29ff494ed02f43af3a58565c4b
