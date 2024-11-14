@extends('layouts.app')

@section('content')
    <h2>Tambah Pasar Baru</h2>

    <form method="POST" action="{{ route('markets.store') }}" enctype="multipart/form-data">
        @csrf

        <label for="nama">Nama Pasar:</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>

        <label for="lokasi">Alamat (Nama Tempat):</label>
        <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" required placeholder="Masukkan alamat lengkap">

        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>

        <label for="tanggal_pendirian">Tanggal Pendirian:</label>
        <input type="date" id="tanggal_pendirian" name="tanggal_pendirian" value="{{ old('tanggal_pendirian') }}" required>

        <label for="sejarah_pendirian">Sejarah Pendirian:</label>
        <textarea id="sejarah_pendirian" name="sejarah_pendirian">{{ old('sejarah_pendirian') }}</textarea>

        <label for="foto_utama">Foto Utama:</label>
        <input type="file" id="foto_utama" name="foto_utama">

        <label for="foto_galeri">Foto Galeri:</label>
        <input type="file" id="foto_galeri" name="foto_galeri">

        <!-- Input untuk Latitude dan Longitude manual -->
        <label for="latitude">Latitude:</label>
        <input type="text" id="latitude" name="latitude" value="{{ old('latitude') }}" required placeholder="Masukkan nilai latitude">

        <label for="longitude">Longitude:</label>
        <input type="text" id="longitude" name="longitude" value="{{ old('longitude') }}" required placeholder="Masukkan nilai longitude">

        <button type="submit" style="margin-top: 20px;">Simpan</button>
    </form>
@endsection
