@extends('home')

@section('title', 'Detail Acara')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">{{ $event->judul }}</h2>
    <p class="text-muted">{{ \Carbon\Carbon::parse($event->tanggal_acara)->format('d M Y') }}</p>
    <div>
        @if($event->image)
            <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid" alt="{{ $event->judul }}">
        @else
            <img src="{{ asset('images/default.jpg') }}" class="img-fluid" alt="Default Image">
        @endif
    </div>
    <p class="mt-4">{{ $event->deskripsi }}</p>
    <a href="{{ route('acara.index') }}" class="btn btn-primary mt-4">Kembali ke Daftar Acara</a>
</div>
@endsection
