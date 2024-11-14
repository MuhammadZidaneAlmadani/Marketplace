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
        // Validasi input termasuk koordinat
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string',
            'deskripsi' => 'nullable|string',
            'tanggal_pendirian' => 'required|date',
            'sejarah_pendirian' => 'nullable|string',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180',
            'foto_utama' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Tambahkan validasi mime type dan ukuran
            'foto_galeri' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Debugging: Pastikan data diterima dengan benar
        dd($data);

        // Simpan file foto jika ada
        if ($request->hasFile('foto_utama')) {
            $data['foto_utama'] = $request->file('foto_utama')->store('uploads', 'public');
        }

        if ($request->hasFile('foto_galeri')) {
            $data['foto_galeri'] = $request->file('foto_galeri')->store('uploads', 'public');
        }

        // Buat record baru di database
        Market::create($data);

        return redirect()->route('markets.index')->with('success', 'Pasar berhasil ditambahkan.');
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
        // Validasi input termasuk koordinat
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string',
            'deskripsi' => 'nullable|string',
            'tanggal_pendirian' => 'required|date',
            'sejarah_pendirian' => 'nullable|string',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
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
