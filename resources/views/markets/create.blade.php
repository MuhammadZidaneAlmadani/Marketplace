@extends('layouts.app')

@section('content')
    <h2>Tambah Pasar Baru</h2>

    <form method="POST" action="{{ route('markets.store') }}" enctype="multipart/form-data">
        @csrf

        <label for="nama">Nama Pasar:</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>

        <label for="lokasi">Lokasi:</label>
        <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" required>

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

        <button type="submit">Simpan</button>
    </form>
@endsection
