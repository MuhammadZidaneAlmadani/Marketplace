<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Event;

class InformasiController extends Controller
{
    public function index()
    {
        $news = News::all();  // Mengambil data berita
        $events = Event::all();  // Mengambil data event
        return view('informasi.index', compact('news', 'events'));
    }
}
