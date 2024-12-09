@extends('layouts.app')

@section('title', 'Dashboard Pengunjung')

@section('content')
    <h1>Selamat datang di Dashboard Pengunjung</h1>
    <p>Konten khusus pengunjung akan ditampilkan di sini.</p>

    <!-- Info Cards -->
    <div class="row">
        @foreach ($infoCards as $card)
            <div class="col-md-4">
                <div class="card p-4">
                    <h3>{{ $card['title'] }}</h3>
                    <p>{!! $card['description'] !!}</p>
                    <a href="{{ $card['link'] }}" class="btn btn-success">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
