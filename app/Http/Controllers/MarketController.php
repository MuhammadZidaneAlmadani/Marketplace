<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarketController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');
        $markets = Market::when($query, function ($queryBuilder, $query) {
            return $queryBuilder->where('nama', 'like', "%{$query}%")
                ->orWhere('lokasi', 'like', "%{$query}%");
        })->paginate(10);

        return view('admin.markets.index', compact('markets', 'query'));
    }

    public function create()
    {
        return view('admin.markets.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_pendirian' => 'required|date',
            'latitude' => 'required|numeric|between:-90,90', // Latitude harus diisi
            'longitude' => 'required|numeric|between:-180,180', // Longitude harus diisi
            'foto_utama' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto_utama')) {
            $data['foto_utama'] = $request->file('foto_utama')->store('uploads', 'public');
        }

        Market::create($data);

        return redirect()->route('markets.admin.index')->with('success', 'Pasar berhasil ditambahkan.');
    }

    public function show(Market $market)
    {
        // Debugging untuk memastikan data latitude dan longitude tersedia
        if (is_null($market->latitude) || is_null($market->longitude)) {
            return redirect()->route('markets.admin.index')->with('error', 'Data lokasi pasar tidak lengkap.');
        }

        return view('admin.markets.show', compact('market'));
    }

    public function edit(Market $market)
    {
        return view('admin.markets.edit', compact('market'));
    }

    public function update(Request $request, Market $market)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_pendirian' => 'required|date',
            'latitude' => 'required|numeric|between:-90,90', // Latitude harus diisi
            'longitude' => 'required|numeric|between:-180,180', // Longitude harus diisi
            'foto_utama' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto_utama')) {
            if ($market->foto_utama) {
                Storage::disk('public')->delete($market->foto_utama);
            }
            $data['foto_utama'] = $request->file('foto_utama')->store('uploads', 'public');
        }

        $market->update($data);

        return redirect()->route('markets.admin.index')->with('success', 'Pasar berhasil diperbarui.');
    }

    public function destroy(Market $market)
    {
        if ($market->foto_utama) {
            Storage::disk('public')->delete($market->foto_utama);
        }

        $market->delete();

        return redirect()->route('markets.admin.index')->with('success', 'Pasar berhasil dihapus.');
    }
}
