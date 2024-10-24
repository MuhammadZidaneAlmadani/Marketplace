<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index()
    {
        $markets = Market::all(); // Menampilkan semua data pasar
        return view('markets.index', compact('markets'));
    }

    public function create()
    {
        return view('markets.create'); // Menampilkan form untuk membuat data pasar baru
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
        return view('markets.edit', compact('market')); // Menampilkan form untuk edit data pasar
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

    public function destroy(Market $market)
    {
        $market->delete(); // Menghapus data pasar
        return redirect()->route('markets.index')->with('success', 'Pasar berhasil dihapus.');
    }
}
