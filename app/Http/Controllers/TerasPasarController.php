<?php

namespace App\Http\Controllers;

use App\Models\TerasPasar;
use Illuminate\Http\Request;

class TerasPasarController extends Controller
{
    public function index()
    {
        $terasPasar = TerasPasar::all(); // Menampilkan semua Teras Pasar
        return view('teras_pasar.index', compact('terasPasar'));
    }

    public function create()
    {
        return view('teras_pasar.create'); // Menampilkan form untuk membuat data Teras Pasar baru
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_toko' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image',
            'digitalisasi_data' => 'boolean',
            'pembayaran_retribusi_elektronik' => 'boolean',
        ]);

        TerasPasar::create($validatedData); // Menyimpan data Teras Pasar baru
        return redirect()->route('teras-pasar.index')->with('success', 'Teras Pasar berhasil dibuat.');
    }

    public function edit(TerasPasar $terasPasar)
    {
        return view('teras_pasar.edit', compact('terasPasar')); // Menampilkan form untuk edit Teras Pasar
    }

    public function update(Request $request, TerasPasar $terasPasar)
    {
        $validatedData = $request->validate([
            'nama_toko' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image',
            'digitalisasi_data' => 'boolean',
            'pembayaran_retribusi_elektronik' => 'boolean',
        ]);

        $terasPasar->update($validatedData); // Memperbarui data Teras Pasar
        return redirect()->route('teras-pasar.index')->with('success', 'Teras Pasar berhasil diperbarui.');
    }

    public function destroy(TerasPasar $terasPasar)
    {
        $terasPasar->delete(); // Menghapus Teras Pasar
        return redirect()->route('teras-pasar.index')->with('success', 'Teras Pasar berhasil dihapus.');
    }
}
