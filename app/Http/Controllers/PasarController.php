<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasarController extends Controller
{
    public function index()
    {
        return view('pasar_pengunjung', ['page' => 'index']);
    }

    public function pengunjung()
    {
        return view('pasar_pengunjung', ['page' => 'pengunjung']);
    }
}
