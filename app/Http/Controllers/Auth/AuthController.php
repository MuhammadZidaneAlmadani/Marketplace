<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan form login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Memproses login pengguna.
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string',
            'remember' => 'nullable|boolean',
        ], [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
        ]);

        // Mengambil input login
        $credentials = $request->only('username', 'password');
        $remember = $request->boolean('remember');

        // Coba autentikasi
        if (Auth::attempt($credentials, $remember)) {
            // Redirect berdasarkan role pengguna
            if (Auth::user()->role === 'admin') {
                return redirect()->route('dashboard');
            }

            return redirect()->route('home');
        }

        // Jika gagal login
        return redirect()->route('login')->withErrors([
            'login' => 'Username atau password salah.',
        ]);
    }

    /**
     * Logout dan arahkan ke halaman login.
     */
    public function logout()
    {
        Auth::logout(); // Logout pengguna
        return redirect()->route('login')->with('status', 'Anda telah berhasil logout.');
    }
}
