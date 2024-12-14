<?php

namespace App\Http\Controllers\Pengunjung;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Tampilkan daftar acara untuk pengunjung.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $events = Event::all(); // Mengambil semua data acara
        return view('pengunjung.events.index', compact('events'));
    }

    /**
     * Tampilkan detail acara untuk pengunjung.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $event = Event::findOrFail($id); // Mengambil detail acara berdasarkan ID
        return view('pengunjung.events.show', compact('event'));
    }
}
