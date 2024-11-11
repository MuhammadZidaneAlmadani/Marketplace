<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Buat instance controller baru.
     * Terapkan middleware auth untuk memastikan pengguna telah login.
     *
     * @return void
     */
    public function __construct()
    {
        // Terapkan middleware 'auth' jika ingin mencoba tanpa di route
        //$this->middleware('auth'); // Bisa dihapus jika middleware sudah di route
    }

    /**
     * Tampilkan halaman dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Periksa apakah pengguna sudah terautentikasi
        if (Auth::check()) {
            // Jika ya, kembalikan tampilan 'home'
            return view('home'); // Pastikan view 'home' sudah dibuat
        }

        // Jika tidak, redirect ke halaman login atau halaman lain
        return redirect()->route('login'); // Sesuaikan dengan rute yang ada
    }
}
