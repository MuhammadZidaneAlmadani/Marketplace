@extends('layouts.app')

@section('content')
    <h2>Detail Pasar</h2>

    <p><strong>Nama Pasar:</strong> {{ $market->nama }}</p>
    <p><strong>Lokasi:</strong> {{ $market->lokasi }}</p>
    <p><strong>Deskripsi:</strong> {{ $market->deskripsi }}</p>
    <p><strong>Tanggal Pendirian:</strong> {{ $market->tanggal_pendirian }}</p>
    <p><strong>Sejarah Pendirian:</strong> {{ $market->sejarah_pendirian }}</p>

    {{-- Menampilkan Foto Utama dan Foto Galeri --}}
    <div>
        @foreach (['foto_utama' => 'Foto Utama', 'foto_galeri' => 'Foto Galeri'] as $field => $label)
            @if($market->$field)
                <p><strong>{{ $label }}:</strong></p>
                <img src="{{ asset('storage/' . $market->$field) }}" alt="{{ $label }} {{ $market->nama }}" class="img-fluid">
            @endif
        @endforeach
    </div>

    <a href="{{ route('markets.index') }}">Kembali ke Daftar Pasar</a>
@endsection
