<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;
use Illuminate\Support\Facades\Storage;

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
        // Validasi input termasuk koordinat dan file gambar
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string',
            'deskripsi' => 'nullable|string',
            'tanggal_pendirian' => 'required|date',
            'sejarah_pendirian' => 'nullable|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'foto_utama' => 'nullable|image',
            'foto_galeri' => 'nullable|image',
        ]);

        // Menyimpan file foto utama jika ada
        if ($request->hasFile('foto_utama')) {
            $data['foto_utama'] = $request->file('foto_utama')->store('uploads', 'public');
        }

        // Menyimpan file foto galeri jika ada
        if ($request->hasFile('foto_galeri')) {
            $data['foto_galeri'] = $request->file('foto_galeri')->store('uploads', 'public');
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
        // Validasi input termasuk koordinat dan file gambar
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string',
            'deskripsi' => 'nullable|string',
            'tanggal_pendirian' => 'required|date',
            'sejarah_pendirian' => 'nullable|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'foto_utama' => 'nullable|image',
            'foto_galeri' => 'nullable|image',
        ]);

        $market = Market::findOrFail($id);

        // Menyimpan file foto utama jika ada dan menghapus file lama
        if ($request->hasFile('foto_utama')) {
            if ($market->foto_utama) {
                Storage::disk('public')->delete($market->foto_utama);
            }
            $data['foto_utama'] = $request->file('foto_utama')->store('uploads', 'public');
        }

        // Menyimpan file foto galeri jika ada dan menghapus file lama
        if ($request->hasFile('foto_galeri')) {
            if ($market->foto_galeri) {
                Storage::disk('public')->delete($market->foto_galeri);
            }
            $data['foto_galeri'] = $request->file('foto_galeri')->store('uploads', 'public');
        }

        // Update data di database
        $market->update($data);

        return redirect()->route('markets.index');
    }

    public function destroy($id)
    {
        $market = Market::findOrFail($id);

        // Hapus file foto utama dan galeri dari storage jika ada
        if ($market->foto_utama) {
            Storage::disk('public')->delete($market->foto_utama);
        }
        if ($market->foto_galeri) {
            Storage::disk('public')->delete($market->foto_galeri);
        }

        // Hapus data dari database
        $market->delete();

        return redirect()->route('markets.index');
    }
}
