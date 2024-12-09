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
        $news = News::latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    // Menampilkan form untuk membuat berita baru
    public function create()
    {
        return view('admin.news.create');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'published_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('news_images', 'public');
        }

        News::create($validatedData);

        return redirect()->route('news.admin.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    // Menampilkan form untuk edit berita
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    // Memperbarui berita
    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'published_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($news->image && Storage::exists('public/' . $news->image)) {
                Storage::delete('public/' . $news->image);
            }
            $validatedData['image'] = $request->file('image')->store('news_images', 'public');
        }

        $news->update($validatedData);

        return redirect()->route('news.admin.index')->with('success', 'Berita berhasil diperbarui.');
    }

    // Menghapus berita
    public function destroy(News $news)
    {
        if ($news->image && Storage::exists('public/' . $news->image)) {
            Storage::delete('public/' . $news->image);
        }

        $news->delete();

        return redirect()->route('news.admin.index')->with('success', 'Berita berhasil dihapus.');
    }

    // Menampilkan berita secara detail
    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }
}
