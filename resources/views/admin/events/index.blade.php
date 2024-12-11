@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Daftar Acara</h2>

    <a href="{{ route('events.admin.create') }}" class="btn btn-primary mb-3">Tambah Acara Baru</a>

    <div class="row">
        @foreach ($events as $event)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if ($event->image)
                        <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->judul }}">
                    @else
                        <img src="{{ asset('images/default.jpg') }}" class="card-img-top" alt="Default Image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->judul }}</h5>
                        <p class="text-muted">{{ \Carbon\Carbon::parse($event->tanggal_acara)->format('d M Y') }}</p>
                        <p class="card-text">{{ Str::limit($event->deskripsi, 100) }}</p>
                        <a href="{{ route('events.admin.show', $event->id) }}" class="btn btn-outline-primary">Selengkapnya</a>
                        <a href="{{ route('events.admin.edit', $event->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('events.admin.destroy', $event->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
