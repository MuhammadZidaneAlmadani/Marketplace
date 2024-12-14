@extends('pengunjung.home')

@section('title', $news->judul)

@section('content')
<div class="container">
    <h2>{{ $news->judul }}</h2>
    @if ($news->image)
        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->judul }}" class="img-fluid mb-3">
    @else
        <img src="{{ asset('images/default.jpg') }}" alt="Default Image" class="img-fluid mb-3">
    @endif
    <p>{{ $news->konten }}</p>
    <p class="text-muted">{{ \Carbon\Carbon::parse($news->published_at)->format('d M Y') }}</p>
    <a href="{{ route('news.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
