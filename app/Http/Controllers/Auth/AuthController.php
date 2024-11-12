<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan file Blade `resources/views/auth/login.blade.php` ada
    }

    // Memproses login
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('dashboard'); // Arahkan ke dashboard
        }

        return redirect()->route('login')->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    // Logout dan arahkan ke halaman login
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
