<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all(); // Menampilkan semua acara
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create'); // Menampilkan form untuk membuat acara baru
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'deskripsi' => 'nullable|string',
        ]);

        Event::create($validatedData); // Menyimpan acara baru
        return redirect()->route('events.index')->with('success', 'Acara berhasil dibuat.');
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event')); // Menampilkan form untuk edit acara
    }

    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'deskripsi' => 'nullable|string',
        ]);

        $event->update($validatedData); // Memperbarui acara
        return redirect()->route('events.index')->with('success', 'Acara berhasil diperbarui.');
    }

    public function destroy(Event $event)
    {
        $event->delete(); // Menghapus acara
        return redirect()->route('events.index')->with('success', 'Acara berhasil dihapus.');
    }
}
