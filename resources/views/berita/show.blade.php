@extends('home')

@section('title', 'Detail Berita')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">{{ $news->judul }}</h2>
    <p class="text-muted">{{ \Carbon\Carbon::parse($news->published_at)->format('d M Y') }}</p>
    <div>
        @if($news->image)
            <img src="{{ asset('storage/' . $news->image) }}" class="img-fluid" alt="{{ $news->judul }}">
        @else
            <img src="{{ asset('images/default.jpg') }}" class="img-fluid" alt="Default Image">
        @endif
    </div>
    <p class="mt-4">{{ $news->konten }}</p>
    <a href="{{ route('berita.index') }}" class="btn btn-primary mt-4">Kembali ke Daftar Berita</a>
</div>
@endsection
