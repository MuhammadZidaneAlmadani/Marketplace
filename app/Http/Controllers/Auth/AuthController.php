<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Memproses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string',
            'remember' => 'nullable|boolean',
        ]);

        $credentials = $request->only('username', 'password');
        $remember = $request->boolean('remember');

        // Autentikasi pengguna
        if (Auth::attempt($credentials, $remember)) {
            // Redirect berdasarkan role pengguna
            if (Auth::user()->role === 'admin') {
                return redirect()->route('dashboard');
            }

            return redirect()->route('home');
        }

        // Jika gagal login
        return redirect()->route('login')->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    // Logout dan arahkan ke halaman login
    public function logout()
    {
        Auth::logout(); // Logout pengguna
        return redirect()->route('login')->with('status', 'Anda telah berhasil logout.');
    }
}

