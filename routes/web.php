<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;

// Route untuk halaman utama (Home)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route untuk Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk Dashboard (Halaman setelah Login)
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
