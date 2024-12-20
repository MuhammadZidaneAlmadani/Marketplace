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
use App\Http\Controllers\TerasPasarController;
use App\Http\Controllers\PasarPublikController;
use App\Http\Controllers\BeritaPublikController;
use App\Http\Controllers\AcaraPublikController;
use App\Http\Controllers\TerasPasarPublikController;
use App\Http\Middleware\IsAdmin;

// -----------------------------------------
// RUTE UTAMA PENGUNJUNG
// -----------------------------------------

// Halaman utama pengunjung
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rute Pasar
Route::get('/pasar', [PasarPublikController::class, 'index'])->name('pasar.index');
Route::get('/pasar/{id}', [PasarPublikController::class, 'show'])->name('pasar.show');

// Rute Berita
Route::prefix('berita')->name('berita.')->group(function () {
    Route::get('/', [BeritaPublikController::class, 'index'])->name('index');
    Route::get('/{id}', [BeritaPublikController::class, 'show'])->name('show');
});

// Rute Acara
Route::prefix('acara')->name('acara.')->group(function () {
    Route::get('/', [AcaraPublikController::class, 'index'])->name('index');
    Route::get('/{id}', [AcaraPublikController::class, 'show'])->name('show');
});

// Rute Teras Pasar
Route::prefix('teras-pasar')->name('teras-pasar.')->group(function () {
    Route::get('/', [TerasPasarPublikController::class, 'index'])->name('index');
    Route::get('/{id}', [TerasPasarPublikController::class, 'show'])->name('show');
});

// Halaman utama
Route::get('/dashboard', [DashboardController::class, 'index'])->name('guest.dashboard');

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

    // Rute untuk mengelola pasar (admin)
    // Market management
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
        Route::get('/', [NewsController::class, 'index'])->name('index'); // news.admin.index
        Route::get('/create', [NewsController::class, 'create'])->name('create'); // news.admin.create
        Route::post('/', [NewsController::class, 'store'])->name('store'); // news.admin.store
        Route::get('/{news}', [NewsController::class, 'show'])->name('show'); // news.admin.show
        Route::get('/{news}/edit', [NewsController::class, 'edit'])->name('edit'); // news.admin.edit
        Route::put('/{news}', [NewsController::class, 'update'])->name('update'); // news.admin.update
        Route::delete('/{news}', [NewsController::class, 'destroy'])->name('destroy'); // news.admin.destroy
    });

    // Rute untuk mengelola acara
    // Event management
    Route::prefix('events')->name('events.admin.')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('index'); // events.admin.index
        Route::get('/create', [EventController::class, 'create'])->name('create'); // events.admin.create
        Route::post('/', [EventController::class, 'store'])->name('store'); // events.admin.store
        Route::get('/{event}', [EventController::class, 'show'])->name('show'); // events.admin.show
        Route::get('/{event}/edit', [EventController::class, 'edit'])->name('edit'); // events.admin.edit
        Route::put('/{event}', [EventController::class, 'update'])->name('update'); // events.admin.update
        Route::delete('/{event}', [EventController::class, 'destroy'])->name('destroy'); // events.admin.destroy
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

// -----------------------------------------
// RESOURCE ROUTES
// -----------------------------------------

Route::resource('markets', MarketController::class)->except(['create', 'edit']);
Route::resource('news', NewsController::class)->except(['create', 'edit']);
Route::resource('events', EventController::class)->except(['create', 'edit']);

// -----------------------------------------
// RUTE LAINNYA
// -----------------------------------------

//dashboard untuk guest
Route::get('/dashboard', [DashboardController::class, 'index'])->name('guest.dashboard');

Route::get('/layanan', [NewsController::class, 'index'])->name('layanan');
Route::get('/hubungi-kami', [ContactController::class, 'index'])->name('hubungi-kami');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
