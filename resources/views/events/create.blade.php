@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Acara Baru</h2>
    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Acara</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_acara" class="form-label">Tanggal Acara</label>
            <input type="date" class="form-control" id="tanggal_acara" name="tanggal_acara" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Acara</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
