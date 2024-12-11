@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center">Detail Pasar</h2>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <p><strong>Nama Pasar:</strong> {{ $market->nama }}</p>
            <p><strong>Lokasi:</strong> {{ $market->lokasi }}</p>
            <p><strong>Deskripsi:</strong> {{ $market->deskripsi }}</p>
            <p><strong>Tanggal Pendirian:</strong>
                {{ $market->tanggal_pendirian ? \Carbon\Carbon::parse($market->tanggal_pendirian)->format('d M Y') : 'Tidak tersedia' }}
            </p>
            <p><strong>Latitude:</strong> {{ $market->latitude ?? 'Tidak tersedia' }}</p>
            <p><strong>Longitude:</strong> {{ $market->longitude ?? 'Tidak tersedia' }}</p>
        </div>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <p><strong>Lokasi Pasar pada Peta:</strong></p>
            <div id="map" style="height: 400px; border: 1px solid #ccc;"></div>
        </div>
    </div>

    @if($market->foto_utama)
    <div class="card shadow-sm mb-4">
        <div class="card-body text-center">
            <p><strong>Foto Utama:</strong></p>
            <img src="{{ asset('storage/' . $market->foto_utama) }}" alt="Foto Utama {{ $market->nama }}" class="img-fluid rounded" style="max-height: 300px;">
        </div>
    </div>
    @else
    <div class="alert alert-warning">
        <strong>Foto Utama:</strong> Tidak tersedia.
    </div>
    @endif

    <a href="{{ route('markets.admin.index') }}" class="btn btn-secondary">Kembali ke Daftar Pasar</a>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Pastikan Latitude dan Longitude tidak null
        const latitude = {{ $market->latitude ?? 'null' }};
        const longitude = {{ $market->longitude ?? 'null' }};

        if (latitude && longitude) {
            // Inisialisasi Map
            const map = L.map('map').setView([latitude, longitude], 15);

            // Tambahkan Tile Layer (Peta Dasar)
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 18,
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Tambahkan Marker
            L.marker([latitude, longitude]).addTo(map)
                .bindPopup("<b>{{ $market->nama }}</b><br>{{ $market->lokasi }}")
                .openPopup();
        } else {
            document.getElementById('map').innerHTML = '<p class="text-danger text-center">Lokasi tidak tersedia.</p>';
        }
    });
</script>
@endsection
