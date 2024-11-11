@extends('layouts.app')

@section('content')
    <h2>Tambah Pasar Baru</h2>

    <form method="POST" action="{{ route('markets.store') }}" enctype="multipart/form-data">
        @csrf

        <label for="nama">Nama Pasar:</label>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>

        <label for="lokasi">Lokasi (Nama Tempat):</label>
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

        <!-- Input untuk Latitude dan Longitude -->
        <label for="latitude">Latitude:</label>
        <input type="text" id="latitude" name="latitude" value="{{ old('latitude') }}" required>

        <label for="longitude">Longitude:</label>
        <input type="text" id="longitude" name="longitude" value="{{ old('longitude') }}" required>

        <!-- Div untuk Peta -->
        <div id="map" style="width: 100%; height: 400px; margin-top: 20px;"></div>

        <button type="submit" style="margin-top: 20px;">Simpan</button>
    </form>

    <!-- Script untuk Menampilkan Peta Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer></script>
    <script>
        function initMap() {
            // Lokasi default (sesuaikan dengan lokasi umum yang diinginkan)
            const defaultLocation = { lat: -7.250445, lng: 112.768845 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: defaultLocation,
            });

            // Tambahkan marker yang dapat dipindahkan
            let marker = new google.maps.Marker({
                position: defaultLocation,
                map: map,
                draggable: true
            });

            // Event Listener untuk dragend pada marker
            google.maps.event.addListener(marker, 'dragend', function() {
                document.getElementById('latitude').value = marker.getPosition().lat();
                document.getElementById('longitude').value = marker.getPosition().lng();
            });

            // Event Listener untuk klik pada peta
            google.maps.event.addListener(map, 'click', function(event) {
                const clickedLocation = event.latLng;
                marker.setPosition(clickedLocation);
                document.getElementById('latitude').value = clickedLocation.lat();
                document.getElementById('longitude').value = clickedLocation.lng();
            });
        }
    </script>
@endsection
