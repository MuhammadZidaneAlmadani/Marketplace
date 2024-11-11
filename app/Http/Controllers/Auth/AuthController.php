<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan form login
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Proses login pengguna
     */
    public function login(Request $request)
    {
        // Validasi inputan untuk memastikan username dan password disediakan
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek apakah kredensial pengguna cocok dengan yang ada di sistem
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Regenerasi session untuk keamanan ekstra
            $request->session()->regenerate();

            // Redirect ke halaman Dashboard jika autentikasi berhasil
            return redirect()->intended('/dashboard'); // Sesuaikan route dengan kebutuhan
        }

        // Jika login gagal, kembalikan pengguna ke halaman login dengan pesan error
        return back()->withErrors([
            'username' => 'Login gagal. Pastikan username dan password benar.',
        ])->withInput(); // Mengembalikan input username untuk kenyamanan pengguna
    }

    /**
     * Proses logout pengguna
     */
    public function logout(Request $request)
    {
        // Logout pengguna dari session
        Auth::logout();

        // Invalidasi session untuk keamanan
        $request->session()->invalidate();

        // Regenerasi token CSRF untuk keamanan
        $request->session()->regenerateToken();

        // Redirect ke halaman utama atau halaman login setelah logout
        return redirect('/');
    }
}
