@extends('admin.layouts.app')

@section('content')
    <h2>Edit Pasar</h2>

    <form method="POST" action="{{ route('markets.update', $market->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="nama">Nama Pasar:</label>
        <input type="text" id="nama" name="nama" value="{{ $market->nama }}" required>

        <label for="lokasi">Lokasi:</label>
        <input type="text" id="lokasi" name="lokasi" value="{{ $market->lokasi }}" required>

        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi">{{ $market->deskripsi }}</textarea>

        <label for="tanggal_pendirian">Tanggal Pendirian:</label>
        <input type="date" id="tanggal_pendirian" name="tanggal_pendirian" value="{{ $market->tanggal_pendirian }}" required>

        <label for="sejarah_pendirian">Sejarah Pendirian:</label>
        <textarea id="sejarah_pendirian" name="sejarah_pendirian">{{ $market->sejarah_pendirian }}</textarea>

        <label for="foto_utama">Foto Utama:</label>
        <input type="file" id="foto_utama" name="foto_utama">

        <label for="foto_galeri">Foto Galeri:</label>
        <input type="file" id="foto_galeri" name="foto_galeri">

        <button type="submit">Perbarui</button>
    </form>

    <a href="{{ route('markets.index') }}">Kembali ke Daftar Pasar</a>
@endsection
