<?php

namespace App\Http\Controllers;

use App\Models\TerasPasar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Pastikan Storage diimpor

class TerasPasarController extends Controller
{
    public function getAllTerasPasar()
    {
        return TerasPasar::all();  // Mengambil semua Teras Pasar
    }

    // Ambil Teras Pasar berdasarkan ID untuk pengunjung
    public function getTerasPasarById($id)
    {
        return TerasPasar::findOrFail($id);  // Menemukan Teras Pasar berdasarkan ID
    }
    public function index()
    {
        $terasPasar = TerasPasar::paginate(10);
        return view('admin.teras_pasar.index', compact('terasPasar'));
    }

    public function create()
    {
        return view('admin.teras_pasar.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_toko' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'digitalisasi_data' => 'boolean',
            'pembayaran_retribusi_elektronik' => 'boolean',
        ]);

        if ($request->hasFile('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('uploads/teras_pasar', 'public');
        }

        TerasPasar::create($validatedData);

        return redirect()->route('teras-pasar.admin.index')->with('success', 'Teras Pasar berhasil dibuat.');
    }

    public function show(TerasPasar $terasPasar)
    {
        return view('admin.teras_pasar.show', compact('terasPasar'));
    }

    public function edit(TerasPasar $terasPasar)
    {
        return view('admin.teras_pasar.edit', compact('terasPasar'));
    }

    public function update(Request $request, TerasPasar $terasPasar)
    {
        $validatedData = $request->validate([
            'nama_toko' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'digitalisasi_data' => 'boolean',
            'pembayaran_retribusi_elektronik' => 'boolean',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($terasPasar->foto) {
                Storage::disk('public')->delete($terasPasar->foto);
            }

            // Simpan foto baru
            $validatedData['foto'] = $request->file('foto')->store('uploads/teras_pasar', 'public');
        }

        $terasPasar->update($validatedData);

        return redirect()->route('teras-pasar.admin.index')->with('success', 'Teras Pasar berhasil diperbarui.');
    }

    public function destroy(TerasPasar $terasPasar)
    {
        // Hapus foto jika ada
        if ($terasPasar->foto) {
            Storage::disk('public')->delete($terasPasar->foto);
        }

        $terasPasar->delete();

        return redirect()->route('teras-pasar.admin.index')->with('success', 'Teras Pasar berhasil dihapus.');
    }
}
