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

    {{-- Menampilkan Google Maps Lokasi --}}
    <h3>Lokasi di Google Maps:</h3>
    <div id="map" style="width: 100%; height: 400px; margin-bottom: 15px;"></div>

    {{-- Link ke Google Maps --}}
    <a href="https://www.google.com/maps/search/?api=1&query={{ $market->latitude }},{{ $market->longitude }}" target="_blank">
        Lihat di Google Maps
    </a>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer></script>
    <script>
        function initMap() {
            // Parsing latitude dan longitude menjadi float agar Google Maps dapat mengenalinya
            const latitude = parseFloat("{{ $market->latitude }}");
            const longitude = parseFloat("{{ $market->longitude }}");

            if (isNaN(latitude) || isNaN(longitude)) {
                console.error("Koordinat tidak valid:", latitude, longitude);
                return;
            }

            const location = { lat: latitude, lng: longitude };

            // Inisialisasi peta
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: location,
            });

            // Menambahkan marker di lokasi
            new google.maps.Marker({
                position: location,
                map: map,
            });
        }
    </script>

    <a href="{{ route('markets.index') }}">Kembali ke Daftar Pasar</a>
@endsection
