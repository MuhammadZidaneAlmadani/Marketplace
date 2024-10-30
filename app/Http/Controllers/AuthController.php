<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Tampilkan form login.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan view ini ada di resources/views/auth/login.blade.php
    }

    /**
     * Menangani proses login pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validasi input dari form login
        $request->validate([
            'username' => 'required|string', // Mengganti 'username' dengan 'string'
            'password' => 'required|string',
        ]);

        // Coba autentikasi pengguna berdasarkan username
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('/home'); // Ganti '/home' dengan route tujuan setelah login
        }

        // Jika autentikasi gagal, kembalikan pesan error untuk 'username'
        throw ValidationException::withMessages([
            'username' => [trans('auth.failed')],
        ]);
    }

    /**
     * Menangani logout pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Ganti '/' dengan route tujuan setelah logout
    }
}
