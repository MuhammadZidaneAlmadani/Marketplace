<?php

namespace App\Http\Controllers;

use App\Http\Controllers\EventController; // Menggunakan Admin Controller
use Illuminate\Http\Request;

class AcaraPublikController extends Controller
{
    protected $eventController;

    public function __construct(EventController $eventController)
    {
        $this->eventController = $eventController;
    }

    // Menampilkan daftar acara
    public function index()
    {
        $acara = $this->eventController->getAllEvents(); // Mengambil data dari EventController Admin
        return view('acara.index', compact('acara'));
    }

    // Menampilkan detail acara
    public function show($id)
    {
        $acara = $this->eventController->getEventById($id); // Mengambil detail data dari EventController
        return view('acara.show', compact('acara'));
    }
}
