@extends('admin.layouts.app')

@section('content')
    <h2>Edit Pasar</h2>

    <form action="{{ route('markets.admin.update', $market->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Input Nama Pasar -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pasar:</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama', $market->nama) }}" class="form-control" required />
        </div>

        <!-- Input Lokasi -->
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi:</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi', $market->lokasi) }}" class="form-control" required />
        </div>

        <!-- Input Deskripsi -->
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" class="form-control">{{ old('deskripsi', $market->deskripsi) }}</textarea>
        </div>

        <!-- Input Tanggal Pendirian -->
        <div class="mb-3">
            <label for="tanggal_pendirian" class="form-label">Tanggal Pendirian:</label>
            <input type="date" id="tanggal_pendirian" name="tanggal_pendirian" value="{{ old('tanggal_pendirian', $market->tanggal_pendirian) }}" class="form-control" required />
        </div>

        <!-- Input Latitude -->
        <div class="mb-3">
            <label for="latitude" class="form-label">Latitude:</label>
            <input type="text" id="latitude" name="latitude" value="{{ old('latitude', $market->latitude) }}" class="form-control" />
        </div>

        <!-- Input Longitude -->
        <div class="mb-3">
            <label for="longitude" class="form-label">Longitude:</label>
            <input type="text" id="longitude" name="longitude" value="{{ old('longitude', $market->longitude) }}" class="form-control" />
        </div>

        <!-- Input Foto Utama -->
        <div class="mb-3">
            <label for="foto_utama" class="form-label">Foto Utama:</label>
            @if($market->foto_utama)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $market->foto_utama) }}" alt="Foto Utama" width="150" class="img-thumbnail">
                </div>
            @endif
            <input type="file" id="foto_utama" name="foto_utama" class="form-control">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">Perbarui Pasar</button>
        </div>
    </form>

    <div>
        <a href="{{ route('markets.admin.index') }}" class="btn btn-primary">Kembali ke Daftar Pasar</a>
    </div>
@endsection
