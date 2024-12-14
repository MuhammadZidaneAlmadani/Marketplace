<?php

namespace App\Http\Controllers\Pengunjung;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Tampilkan daftar berita untuk pengunjung.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $news = News::all(); // Mengambil semua data berita
        return view('pengunjung.news.index', compact('news'));
    }

    /**
     * Tampilkan detail berita untuk pengunjung.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $news = News::findOrFail($id); // Mengambil detail berita berdasarkan ID
        return view('pengunjung.news.show', compact('news'));
    }
}
