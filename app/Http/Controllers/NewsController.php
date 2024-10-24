<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all(); // Menampilkan semua berita
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create'); // Menampilkan form untuk membuat berita baru
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        News::create($validatedData); // Menyimpan berita baru
        return redirect()->route('news.index')->with('success', 'Berita berhasil dibuat.');
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news')); // Menampilkan form untuk edit berita
    }

    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        $news->update($validatedData); // Memperbarui berita
        return redirect()->route('news.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(News $news)
    {
        $news->delete(); // Menghapus berita
        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus.');
    }
}
