@extends('layouts.app')

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
    <a href="{{ route('events.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
