<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarketController extends Controller
{
    // Menampilkan daftar pasar
    public function index(Request $request)
    {
        // Pencarian
        $query = $request->input('search');
        $markets = Market::when($query, function ($queryBuilder, $query) {
            return $queryBuilder->where('nama', 'like', "%{$query}%")
                ->orWhere('lokasi', 'like', "%{$query}%");
        })->paginate(10); // Pagination dengan 10 data per halaman

        return view('admin.markets.index', compact('markets', 'query'));
    }

    // Menampilkan form untuk membuat pasar baru
    public function create()
    {
        return view('admin.markets.create');
    }

    // Menyimpan pasar baru
    public function store(Request $request)
    {
        // Validasi input
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_pendirian' => 'required|date',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'foto_utama' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload foto utama jika ada
        if ($request->hasFile('foto_utama')) {
            $data['foto_utama'] = $request->file('foto_utama')->store('uploads', 'public');
        }

        // Buat data pasar
        Market::create($data);

        return redirect()->route('markets.admin.index')->with('success', 'Pasar berhasil ditambahkan.');
    }

    // Menampilkan detail pasar
    public function show(Market $market)
    {
        return view('admin.markets.show', compact('market'));
    }

    // Menampilkan form edit pasar
    public function edit(Market $market)
    {
        return view('admin.markets.edit', compact('market'));
    }

    // Memperbarui data pasar
    public function update(Request $request, Market $market)
    {
        // Validasi input
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_pendirian' => 'required|date',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'foto_utama' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload foto utama jika ada dan hapus yang lama
        if ($request->hasFile('foto_utama')) {
            if ($market->foto_utama) {
                Storage::disk('public')->delete($market->foto_utama);
            }
            $data['foto_utama'] = $request->file('foto_utama')->store('uploads', 'public');
        }

        // Update data pasar
        $market->update($data);

        return redirect()->route('markets.admin.index')->with('success', 'Pasar berhasil diperbarui.');
    }

    // Menghapus pasar
    public function destroy(Market $market)
    {
        // Hapus foto utama jika ada
        if ($market->foto_utama) {
            Storage::disk('public')->delete($market->foto_utama);
        }

        // Hapus data pasar
        $market->delete();

        return redirect()->route('markets.admin.index')->with('success', 'Pasar berhasil dihapus.');
    }
}
