<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TerasPasarController; // Menggunakan Admin Controller
use Illuminate\Http\Request;

class TerasPasarPublikController extends Controller
{
    protected $terasPasarController;

    public function __construct(TerasPasarController $terasPasarController)
    {
        $this->terasPasarController = $terasPasarController;
    }

    // Menampilkan daftar teras pasar
    public function index()
    {
        $terasPasar = $this->terasPasarController->getAllTerasPasar();
        return view('teraspasar.index', compact('terasPasar'));
    }

    // Menampilkan detail teras pasar
    public function show($id)
    {
        $terasPasar = $this->terasPasarController->getTerasPasarById($id);
        return view('teraspasar.show', compact('terasPasar'));
    }
}
