<?php

namespace App\Http\Controllers;

use App\Http\Controllers\NewsController; // Menggunakan Admin Controller
use Illuminate\Http\Request;

class BeritaPublikController extends Controller
{
    protected $newsController;

    public function __construct(NewsController $newsController)
    {
        $this->newsController = $newsController;
    }

    // Menampilkan daftar berita
    public function index()
    {
        $berita = $this->newsController->getAllNews(); // Mengambil data dari NewsController Admin
        return view('berita.index', compact('berita'));
    }

    // Menampilkan detail berita
    public function show($id)
    {
        $berita = $this->newsController->getNewsById($id); // Mengambil detail data dari NewsController
        return view('berita.show', compact('berita'));
    }
}
