<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    // Menampilkan semua acara
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    // Menampilkan form untuk membuat acara baru
    public function create()
    {
        return view('admin.events.create');
    }

    // Menyimpan acara baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'deskripsi' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Menyimpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Menyimpan data acara ke database
        Event::create($validatedData);

        return redirect()->route('events.admin.index')->with('success', 'Acara berhasil dibuat.');
    }

    // Menampilkan form edit acara
    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    // Memperbarui acara
    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'deskripsi' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Menghapus gambar lama jika ada gambar baru yang diunggah
        if ($request->hasFile('image')) {
            if ($event->image && Storage::exists('public/' . $event->image)) {
                Storage::delete('public/' . $event->image);
            }
            $imagePath = $request->file('image')->store('events', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Mengupdate data acara
        $event->update($validatedData);

        return redirect()->route('events.admin.index')->with('success', 'Acara berhasil diperbarui.');
    }

    // Menghapus acara
    public function destroy(Event $event)
    {
        // Menghapus gambar jika ada
        if ($event->image && Storage::exists('public/' . $event->image)) {
            Storage::delete('public/' . $event->image);
        }

        $event->delete();

        return redirect()->route('events.admin.index')->with('success', 'Acara berhasil dihapus.');
    }

    // Menampilkan acara secara detail
    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }
}
