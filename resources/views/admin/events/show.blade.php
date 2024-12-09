<!-- resources/views/events/show.blade.php (untuk Admin) -->
@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>{{ $event->judul }}</h2>
    @if ($event->image)
        <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->judul }}" class="img-fluid mb-3">
    @else
        <img src="{{ asset('images/default.jpg') }}" alt="Default Image" class="img-fluid mb-3">
    @endif
    <p class="text-muted">{{ \Carbon\Carbon::parse($event->tanggal_acara)->format('d M Y') }}</p>
    <p>{{ $event->deskripsi }}</p>

    <!-- Link untuk admin -->
    @can('update', $event)
        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
    @endcan
    @can('delete', $event)
        <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    @endcan

    <a href="{{ route('events.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
