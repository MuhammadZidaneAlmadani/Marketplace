@extends('pengunjung.home')

@section('title', 'Daftar Acara')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Daftar Acara</h2>
    <a href="{{ route('events.create') }}" class="btn btn-primary mb-3">Tambah Acara Baru</a>
    @if($events->isEmpty())
        <p class="text-center">Tidak ada acara yang tersedia.</p>
    @else
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
                            <a href="{{ route('events.show', $event->id) }}" class="btn btn-outline-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
