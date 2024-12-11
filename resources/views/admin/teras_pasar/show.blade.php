@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Detail Teras Pasar</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nama Toko:</strong> {{ $terasPasar->nama_toko }}</p>
            <p><strong>Deskripsi:</strong> {{ $terasPasar->deskripsi ?? 'Tidak ada deskripsi' }}</p>
            <p><strong>Digitalisasi Data:</strong> {{ $terasPasar->digitalisasi_data ? 'Ya' : 'Tidak' }}</p>
            <p><strong>Pembayaran Retribusi Elektronik:</strong> {{ $terasPasar->pembayaran_retribusi_elektronik ? 'Ya' : 'Tidak' }}</p>

            @if($terasPasar->foto)
            <div class="mt-3">
                <p><strong>Foto:</strong></p>
                <img src="{{ asset('storage/' . $terasPasar->foto) }}" alt="Foto Toko" width="300" class="img-thumbnail">
            </div>
            @else
            <p><strong>Foto:</strong> Tidak ada foto</p>
            @endif
        </div>
    </div>

    <a href="{{ route('teras-pasar.admin.index') }}" class="btn btn-secondary mt-4">Kembali ke Daftar</a>
</div>
@endsection
