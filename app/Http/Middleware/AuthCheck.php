<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthCheck
{
    public function handle($request, Closure $next)
    {
        // Jika pengguna belum login, arahkan ke halaman login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Jika sudah login, lanjutkan ke request berikutnya
        return $next($request);
    }
}
