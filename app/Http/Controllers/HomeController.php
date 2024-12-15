<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Tampilkan halaman utama untuk pengunjung.
     */
    public function index()
    {
        return view('home'); // pastikan file ini ada di resources/views/home.blade.php
    }
}
