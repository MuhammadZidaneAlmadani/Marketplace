@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>{{ $news->judul }}</h2>
    @if($news->image)
        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->judul }}" class="img-fluid mb-3">
    @else
        <img src="{{ asset('images/default-news.jpg') }}" alt="Default Image" class="img-fluid mb-3">
    @endif
    <p>{{ $news->konten }}</p>
    <p class="text-muted">{{ \Carbon\Carbon::parse($news->published_at)->format('d M Y') }}</p>

    @auth
        @if(Auth::user()->role == 'admin')
            <a href="{{ route('news.admin.edit', $news->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('news.admin.destroy', $news->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        @endif
    @endauth

    <a href="{{ route('news.admin.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
