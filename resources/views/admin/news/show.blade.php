@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>{{ $news->judul }}</h2>
    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->judul }}" class="img-fluid mb-3">
    <p>{{ $news->konten }}</p>
    <p class="text-muted">{{ \Carbon\Carbon::parse($news->published_at)->format('d M Y') }}</p>

    @auth
        @if(Auth::user()->role == 'admin')
            <a href="{{ route('news.edit', $news->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('news.destroy', $news->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        @endif
    @endauth

    <a href="{{ route('news.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
