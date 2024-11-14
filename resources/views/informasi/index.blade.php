@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Informasi</h2>

    <!-- Bagian Berita -->
    <h3>Berita</h3>
    <div class="row mb-5">
        @foreach ($news as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if ($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->judul }}">
                    @else
                        <img src="{{ asset('images/default.jpg') }}" class="card-img-top" alt="Default Image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text">{{ Str::limit($item->konten, 100) }}</p>
                        <p class="text-muted">{{ \Carbon\Carbon::parse($item->published_at)->format('d M Y') }}</p>
                        <a href="{{ route('news.show', $item->id) }}" class="btn btn-outline-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Bagian Event -->
    <h3>Event</h3>
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
                        <p class="card-text">{{ Str::limit($event->deskripsi, 100) }}</p>
                        <p class="text-muted">{{ \Carbon\Carbon::parse($event->tanggal_acara)->format('d M Y') }}</p>
                        <a href="{{ route('events.show', $event->id) }}" class="btn btn-outline-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
