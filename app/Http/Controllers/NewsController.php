<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    // Menampilkan semua berita
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    // Menampilkan form untuk membuat berita baru
    public function create()
    {
        return view('news.create');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'published_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        // Menyimpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        News::create($validatedData);
        return redirect()->route('news.index')->with('success', 'Berita berhasil dibuat.');
    }

    // Menampilkan form untuk edit berita
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    // Memperbarui berita
    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'published_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        // Menghapus gambar lama jika ada gambar baru yang diunggah
        if ($request->hasFile('image')) {
            if ($news->image && Storage::exists('public/' . $news->image)) {
                Storage::delete('public/' . $news->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $news->update($validatedData);
        return redirect()->route('news.index')->with('success', 'Berita berhasil diperbarui.');
    }

    // Menghapus berita
    public function destroy(News $news)
    {
        // Menghapus gambar jika ada
        if ($news->image && Storage::exists('public/' . $news->image)) {
            Storage::delete('public/' . $news->image);
        }

        $news->delete();
        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus.');
    }

    // Menampilkan berita secara detail
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }
}
