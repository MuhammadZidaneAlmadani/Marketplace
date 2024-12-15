<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Http\Controllers\MarketController; // Menggunakan Admin Controller
use Illuminate\Http\Request;

class PasarPublikController extends Controller
{
    protected $marketController;

    public function __construct(MarketController $marketController)
    {
        $this->marketController = $marketController;
    }

    // Menampilkan daftar pasar
    // Menampilkan daftar pasar
    public function index(Request $request)
    {
        // Input pencarian
        $query = $request->input('search');

        // Ambil data dari Market
        $markets = Market::when($query, function ($queryBuilder, $query) {
            return $queryBuilder->where('nama', 'like', "%{$query}%")
                ->orWhere('lokasi', 'like', "%{$query}%");
        })->paginate(10);

        // Debugging untuk memastikan variabel
        // dd($markets);

        return view('pasar.index', ['markets' => $markets]);
    }


    // Menampilkan detail pasar
    public function show($id)
    {
        // Ambil data pasar berdasarkan ID
        $market = $this->marketController->getMarketById($id);

        // Pastikan data ditemukan atau kembalikan error 404
        if (!$market) {
            abort(404, 'Data pasar tidak ditemukan');
        }

        return view('pasar.show', compact('market')); // Kirimkan variabel tunggal 'market'
    }

}
