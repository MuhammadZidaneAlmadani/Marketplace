@extends('home')

@section('title', 'Daftar Teras Pasar')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Daftar Teras Pasar</h2>
    @if($terasPasar->isEmpty())
        <p class="text-center">Tidak ada teras pasar yang tersedia.</p>
    @else
        <div class="row">
            @foreach ($terasPasar as $teras)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if ($teras->foto)
                            <img src="{{ asset('storage/' . $teras->foto) }}" class="card-img-top" alt="{{ $teras->nama_toko }}">
                        @else
                            <img src="{{ asset('images/default.jpg') }}" class="card-img-top" alt="Default Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $teras->nama_toko }}</h5>
                            <p class="card-text">{{ Str::limit($teras->deskripsi, 100) }}</p>
                            <a href="{{ route('teraspasar.show', $teras->id) }}" class="btn btn-outline-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
