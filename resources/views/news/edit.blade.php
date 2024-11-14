@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Berita</h2>
    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $news->judul }}" required>
        </div>
        <div class="mb-3">
            <label for="konten" class="form-label">Konten</label>
            <textarea class="form-control" id="konten" name="konten" rows="5" required>{{ $news->konten }}</textarea>
        </div>
        <div class="mb-3">
            <label for="published_at" class="form-label">Tanggal Publikasi</label>
            <input type="date" class="form-control" id="published_at" name="published_at" value="{{ $news->published_at }}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
