@extends('admin.layouts.app')

@section('content')
    <h2>Tambah Pasar Baru</h2>

    <form action="{{ route('markets.admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pasar</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="tanggal_pendirian" class="form-label">Tanggal Pendirian</label>
            <input type="date" name="tanggal_pendirian" id="tanggal_pendirian" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="foto_utama" class="form-label">Foto Utama</label>
            <input type="file" name="foto_utama" id="foto_utama" class="form-control">
        </div>

        <div class="mb-3">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="text" name="latitude" id="latitude" class="form-control">
        </div>

        <div class="mb-3">
            <label for="longitude" class="form-label">Longitude</label>
            <input type="text" name="longitude" id="longitude" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
