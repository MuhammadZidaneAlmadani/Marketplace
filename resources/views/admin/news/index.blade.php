@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Daftar Berita</h2>

    <a href="{{ route('news.admin.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>

    <div class="row">
        @foreach ($news as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . ($item->image ?? 'default.jpg')) }}" class="card-img-top" alt="{{ $item->judul }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text">{{ Str::limit($item->konten, 150) }}</p>
                        <p class="text-muted">{{ \Carbon\Carbon::parse($item->published_at)->format('d M Y') }}</p>
                        <a href="{{ route('news.admin.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('news.admin.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                        </form>
                        <a href="{{ route('news.admin.show', $item->id) }}" class="btn btn-outline-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $news->links() }}
</div>
@endsection
