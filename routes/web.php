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
use App\Http\Controllers\PasarController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\HubungiKamiController;

// Rute Otentikasi
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
Route::resource('events', EventController::class);

// Rute Informasi
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');
Route::get('/informasi/news', [InformasiController::class, 'news'])->name('news');
Route::get('/informasi/event', [InformasiController::class, 'event'])->name('event');

// Route untuk halaman lain
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/pasar', [PasarController::class, 'index'])->name('pasar');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/hubungi-kami', [HubungiKamiController::class, 'index'])->name('hubungi-kami');

// Contact Us
Route::get('/hubungi', [ContactController::class, 'index'])->name('contact.index');
Route::post('/hubungi', [ContactController::class, 'submit'])->name('contact.submit');
