@extends('home')

@section('title', 'Detail Teras Pasar')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">{{ $terasPasar->nama_toko }}</h2>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('storage/' . $terasPasar->foto) }}" class="img-fluid" alt="{{ $terasPasar->nama_toko }}">
        </div>
        <div class="col-md-6">
            <p><strong>Deskripsi:</strong> {{ $terasPasar->deskripsi }}</p>
            <p><strong>Digitalisasi Data:</strong> {{ $terasPasar->digitalisasi_data ? 'Ya' : 'Tidak' }}</p>
            <p><strong>Pembayaran Retribusi Elektronik:</strong> {{ $terasPasar->pembayaran_retribusi_elektronik ? 'Ya' : 'Tidak' }}</p>
        </div>
    </div>
    <a href="{{ route('teraspasar.index') }}" class="btn btn-primary mt-4">Kembali ke Daftar Teras Pasar</a>
</div>
@endsection
