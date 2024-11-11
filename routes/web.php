<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MarketController;
use App\Http\Middleware\AuthCheck; // Import middleware langsung di route

// Route untuk Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk Dashboard dengan Middleware Custom (AuthCheck)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(AuthCheck::class);

// Route untuk Market (CRUD Pasar)
Route::resource('markets', MarketController::class);
