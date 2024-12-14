<?php

namespace App\Http\Controllers\Pengunjung;

use App\Http\Controllers\Controller;
use App\Models\Market;

class MarketController extends Controller
{
    /**
     * Tampilkan daftar pasar untuk pengunjung.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $markets = Market::all(); // Mengambil semua data pasar
        return view('pengunjung.markets.index', compact('markets'));
    }

    /**
     * Tampilkan detail pasar untuk pengunjung.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $market = Market::findOrFail($id); // Mengambil detail pasar berdasarkan ID
        return view('pengunjung.markets.show', compact('market'));
    }
}
