@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $news->judul }}</h2>
    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->judul }}" class="img-fluid mb-3">
    <p>{{ $news->konten }}</p>
    <p class="text-muted">{{ \Carbon\Carbon::parse($news->published_at)->format('d M Y') }}</p>
    <a href="{{ route('news.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
