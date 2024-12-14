<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Tampilkan halaman utama untuk pengunjung.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Tampilkan view untuk halaman utama pengunjung
        return view('pengunjung.home'); // Pastikan file home.blade.php ada di resources/views/pengunjung/
    }
}
