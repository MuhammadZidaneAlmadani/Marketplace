<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; // Tambahkan ini

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
        $credentials = $request->only('username', 'password');

        // Gunakan Auth::attempt() secara langsung
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    // Logout dan arahkan ke halaman login
    public function logout()
    {
        Auth::logout(); // Gunakan Auth::logout() secara langsung
        return redirect()->route('login');
    }
}
