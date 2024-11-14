@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Berita</h2>
    <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>
    <div class="row">
        @foreach ($news as $item)
            <div class="col-md-12 mb-4">
                <div class="card">
                    <img src="{{ asset('images/' . ($item->image ?? 'default.jpg')) }}" class="card-img-top" alt="{{ $item->judul }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text">{{ Str::limit($item->konten, 200) }}</p>
                        <p class="text-muted">{{ \Carbon\Carbon::parse($item->published_at)->format('d M Y') }}</p>
                        <a href="{{ route('news.show', $item->id) }}" class="btn btn-outline-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
