@extends('layouts.app')

@section('content')
    @if(isset($markets))
        <h2>Daftar Pasar</h2>
        <a href="{{ route('markets.create') }}">Tambah Pasar Baru</a>
        <ul>
            @foreach($markets as $market)
                <li>
                    <a href="{{ route('markets.show', $market->id) }}">{{ $market->nama }}</a>
                    <a href="{{ route('markets.edit', $market->id) }}">Edit</a>
                    <form action="{{ route('markets.destroy', $market->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <h2>{{ isset($market) ? (isset($isView) && $isView ? 'Detail Pasar' : 'Edit Pasar') : 'Tambah Pasar Baru' }}</h2>

        <form method="POST" action="{{ isset($market) ? route('markets.update', $market->id) : route('markets.store') }}" enctype="multipart/form-data">
            @csrf
            @if(isset($market))
                @if(!isset($isView) || !$isView)
                    @method('PUT')
                @endif
            @endif

            <label for="nama">Nama Pasar:</label>
            <input type="text" id="nama" name="nama" value="{{ $market->nama ?? old('nama') }}" {{ isset($isView) && $isView ? 'readonly' : '' }} required>

            <label for="lokasi">Lokasi:</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ $market->lokasi ?? old('lokasi') }}" {{ isset($isView) && $isView ? 'readonly' : '' }} required>

            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" {{ isset($isView) && $isView ? 'readonly' : '' }}>{{ $market->deskripsi ?? old('deskripsi') }}</textarea>

            <label for="tanggal_pendirian">Tanggal Pendirian:</label>
            <input type="date" id="tanggal_pendirian" name="tanggal_pendirian" value="{{ $market->tanggal_pendirian ?? old('tanggal_pendirian') }}" {{ isset($isView) && $isView ? 'readonly' : '' }} required>

            <label for="sejarah_pendirian">Sejarah Pendirian:</label>
            <textarea id="sejarah_pendirian" name="sejarah_pendirian" {{ isset($isView) && $isView ? 'readonly' : '' }}>{{ $market->sejarah_pendirian ?? old('sejarah_pendirian') }}</textarea>

            @if(!isset($isView) || !$isView)
                <label for="foto_utama">Foto Utama:</label>
                <input type="file" id="foto_utama" name="foto_utama">

                <label for="foto_galeri">Foto Galeri:</label>
                <input type="file" id="foto_galeri" name="foto_galeri">
            @endif

            @if(!isset($isView) || !$isView)
                <button type="submit">{{ isset($market) ? 'Perbarui' : 'Simpan' }}</button>
            @else
                <a href="{{ route('markets.index') }}">Kembali</a>
            @endif
        </form>
    @endif
@endsection
