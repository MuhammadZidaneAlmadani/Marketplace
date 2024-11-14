<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Tambahkan ini

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'deskripsi' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        Event::create($validatedData);
        return redirect()->route('events.index')->with('success', 'Acara berhasil dibuat.');
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'deskripsi' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($event->image && Storage::exists('public/' . $event->image)) {
                Storage::delete('public/' . $event->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $event->update($validatedData);
        return redirect()->route('events.index')->with('success', 'Acara berhasil diperbarui.');
    }

    public function destroy(Event $event)
    {
        if ($event->image && Storage::exists('public/' . $event->image)) {
            Storage::delete('public/' . $event->image);
        }

        $event->delete();
        return redirect()->route('events.index')->with('success', 'Acara berhasil dihapus.');
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }
}
