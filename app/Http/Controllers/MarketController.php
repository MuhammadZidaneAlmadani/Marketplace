<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;

class MarketController extends Controller
{
    public function index()
    {
        $markets = Market::all();
        return view('markets.index', compact('markets'));
    }

    public function create()
    {
        return view('markets.create');
    }

    public function store(Request $request)
    {
        // Validasi input termasuk file gambar
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string',
            'deskripsi' => 'nullable|string',
            'tanggal_pendirian' => 'required|date',
            'sejarah_pendirian' => 'nullable|string',
            'foto_utama' => 'nullable|image',
            'foto_galeri' => 'nullable|image',
        ]);

        // Menyimpan file foto utama jika ada
        if ($request->hasFile('foto_utama')) {
            $data['foto_utama'] = $request->file('foto_utama')->store('uploads', 'public'); // Path akan disimpan di $data
        }

        // Menyimpan file foto galeri jika ada
        if ($request->hasFile('foto_galeri')) {
            $data['foto_galeri'] = $request->file('foto_galeri')->store('uploads', 'public'); // Path akan disimpan di $data
        }

        // Simpan data ke database
        Market::create($data);

        return redirect()->route('markets.index');
    }

    public function show($id)
    {
        $market = Market::findOrFail($id);
        return view('markets.show', compact('market'));
    }

    public function edit($id)
    {
        $market = Market::findOrFail($id);
        return view('markets.edit', compact('market'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input termasuk file gambar
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string',
            'deskripsi' => 'nullable|string',
            'tanggal_pendirian' => 'required|date',
            'sejarah_pendirian' => 'nullable|string',
            'foto_utama' => 'nullable|image',
            'foto_galeri' => 'nullable|image',
        ]);

        $market = Market::findOrFail($id);

        // Menyimpan file foto utama jika ada
        if ($request->hasFile('foto_utama')) {
            $data['foto_utama'] = $request->file('foto_utama')->store('uploads', 'public');
        }

        // Menyimpan file foto galeri jika ada
        if ($request->hasFile('foto_galeri')) {
            $data['foto_galeri'] = $request->file('foto_galeri')->store('uploads', 'public');
        }

        // Update data di database
        $market->update($data);

        return redirect()->route('markets.index');
    }

    public function destroy($id)
    {
        $market = Market::findOrFail($id);
        $market->delete();
        return redirect()->route('markets.index');
    }
}
