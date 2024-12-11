<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        // Pastikan pengguna login
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors(['message' => 'Silakan login terlebih dahulu.']);
        }

        // Pastikan role pengguna adalah admin
        if (Auth::user()->role !== 'admin') {
            return redirect()->route('home')->withErrors(['message' => 'Anda tidak memiliki akses ke halaman ini.']);
        }

        return $next($request);
    }
}
