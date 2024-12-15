<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function getAllEvents()
    {
        return Event::all();  // Mengambil semua acara
    }

    // Ambil acara berdasarkan ID untuk pengunjung
    public function getEventById($id)
    {
        return Event::findOrFail($id);  // Menemukan acara berdasarkan ID
    }
    public function index()
    {
        $events = Event::paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'deskripsi' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Mengupload gambar jika ada
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('events_images', 'public');
        }

        // Menyimpan acara ke dalam database
        Event::create($validatedData);

        return redirect()->route('events.admin.index')->with('success', 'Acara berhasil ditambahkan.');
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'deskripsi' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Jika ada gambar baru, hapus gambar lama dan simpan gambar baru
        if ($request->hasFile('image')) {
            if ($event->image && Storage::exists('public/' . $event->image)) {
                Storage::delete('public/' . $event->image);
            }
            $validatedData['image'] = $request->file('image')->store('events_images', 'public');
        }

        $event->update($validatedData);

        return redirect()->route('events.admin.index')->with('success', 'Acara berhasil diperbarui.');
    }

    public function destroy(Event $event)
    {
        if ($event->image && Storage::exists('public/' . $event->image)) {
            Storage::delete('public/' . $event->image);
        }

        $event->delete();

        return redirect()->route('events.admin.index')->with('success', 'Acara berhasil dihapus.');
    }

    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }
}
