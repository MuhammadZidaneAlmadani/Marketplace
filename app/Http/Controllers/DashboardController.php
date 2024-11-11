<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\News;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard
     */
    public function index()
    {
        // Mengambil data dari model Market dan News
        $markets = Market::all();
        $news = News::latest()->take(3)->get();

        // Mengirim data ke tampilan dashboard
        return view('dashboard', compact('markets', 'news'));
    }
}
