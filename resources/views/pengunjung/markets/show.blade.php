@extends('pengunjung.home')

@section('title', 'Detail Pasar')

@section('content')
<div class="container">
    <h2>Detail Pasar</h2>

    <p><strong>Nama Pasar:</strong> {{ $market->nama }}</p>
    <p><strong>Lokasi:</strong> {{ $market->lokasi }}</p>
    <p><strong>Deskripsi:</strong> {{ $market->deskripsi }}</p>
    <p><strong>Tanggal Pendirian:</strong> {{ $market->tanggal_pendirian }}</p>
    <p><strong>Sejarah Pendirian:</strong> {{ $market->sejarah_pendirian }}</p>

    @if($market->foto_utama)
        <p><strong>Foto Utama:</strong></p>
        <img src="{{ asset('storage/' . $market->foto_utama) }}" alt="Foto Utama {{ $market->nama }}" class="img-fluid">
    @endif

    @if($market->foto_galeri)
        <p><strong>Foto Galeri:</strong></p>
        <img src="{{ asset('storage/' . $market->foto_galeri) }}" alt="Foto Galeri {{ $market->nama }}" class="img-fluid">
    @endif

    {{-- Menampilkan peta menggunakan Leaflet jika koordinat tersedia --}}
    @if($market->latitude && $market->longitude)
        <h3>Lokasi di OpenStreetMap:</h3>
        <div id="map" style="width: 100%; height: 400px; margin-bottom: 15px;"></div>

        {{-- Tambahkan CSS dan JS untuk Leaflet --}}
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" crossorigin=""></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const location = [{{ $market->latitude }}, {{ $market->longitude }}];
                const map = L.map('map').setView(location, 15);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; OpenStreetMap contributors'
                }).addTo(map);

                L.marker(location).addTo(map)
                    .bindPopup("{{ $market->nama }}")
                    .openPopup();
            });
        </script>
    @else
        <p>Koordinat tidak tersedia untuk lokasi ini.</p>
    @endif

    <a href="{{ route('markets.index') }}" class="btn btn-secondary">Kembali ke Daftar Pasar</a>
</div>
@endsection
