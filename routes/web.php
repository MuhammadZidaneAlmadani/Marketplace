<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\HomeController;

// Route untuk halaman utama (Home)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route untuk Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk Dashboard (Halaman setelah Login)
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
