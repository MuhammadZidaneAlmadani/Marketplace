<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index()
    {
        $markets = Market::all(); // Menampilkan semua data pasar
        return view('markets.form', compact('markets')); // Kirim data pasar ke view untuk ditampilkan sebagai daftar
    }

    public function create()
    {
        return view('markets.form'); // Menggunakan form.blade.php untuk form create
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string',
            'deskripsi' => 'nullable|string',
            'tanggal_pendirian' => 'required|date',
            'sejarah_pendirian' => 'nullable|string',
            'foto_utama' => 'nullable|image',
            'foto_galeri' => 'nullable|image',
        ]);

        Market::create($validatedData); // Menyimpan data pasar ke database
        return redirect()->route('markets.index')->with('success', 'Pasar berhasil dibuat.');
    }

    public function edit(Market $market)
    {
        return view('markets.form', compact('market')); // Menggunakan form.blade.php untuk form edit dengan data pasar
    }

    public function update(Request $request, Market $market)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string',
            'deskripsi' => 'nullable|string',
            'tanggal_pendirian' => 'required|date',
            'sejarah_pendirian' => 'nullable|string',
            'foto_utama' => 'nullable|image',
            'foto_galeri' => 'nullable|image',
        ]);

        $market->update($validatedData); // Memperbarui data pasar
        return redirect()->route('markets.index')->with('success', 'Pasar berhasil diperbarui.');
    }

    public function show(Market $market)
    {
        $isView = true; // Menandakan bahwa ini adalah tampilan detail (read-only)
        return view('markets.form', compact('market', 'isView')); // Menampilkan detail pasar menggunakan form.blade.php
    }

    public function destroy(Market $market)
    {
        $market->delete(); // Menghapus data pasar
        return redirect()->route('markets.index')->with('success', 'Pasar berhasil dihapus.');
    }
}
