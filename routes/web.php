<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;

// Redirect root URL to login page
Route::get('/', function () {
    return redirect()->route('login'); // Redirect ke halaman login
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Halaman login
Route::post('/login', [AuthController::class, 'login']); // Proses login
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Proses logout

// Dashboard Route (Protected by 'auth' middleware)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); // Halaman dashboard
});
