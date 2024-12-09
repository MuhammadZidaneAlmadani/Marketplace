@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Berita</h2>
    <form action="{{ route('news.admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input
                type="text"
                class="form-control @error('judul') is-invalid @enderror"
                id="judul"
                name="judul"
                value="{{ old('judul') }}"
                required>
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="konten" class="form-label">Konten</label>
            <textarea
                class="form-control @error('konten') is-invalid @enderror"
                id="konten"
                name="konten"
                rows="5"
                required>{{ old('konten') }}</textarea>
            @error('konten')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="published_at" class="form-label">Tanggal Publikasi</label>
            <input
                type="date"
                class="form-control @error('published_at') is-invalid @enderror"
                id="published_at"
                name="published_at"
                value="{{ old('published_at') }}"
                required>
            @error('published_at')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input
                type="file"
                class="form-control @error('image') is-invalid @enderror"
                id="image"
                name="image">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
