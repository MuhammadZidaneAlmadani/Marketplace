@extends('admin.layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Selamat datang di Dashboard Admin</h1>
    <p class="text-muted">Kelola data dan statistik sistem Anda di sini.</p>

    <!-- Statistik Info Cards -->
    <div class="row mb-4">
        @foreach ($infoCards as $card)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $card['title'] }}</h5>
                        <p class="card-text text-muted">{!! $card['description'] !!}</p>
                        <a href="{{ $card['link'] }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Section Statistik -->
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h5>Statistik Pasar</h5>
                </div>
                <div class="card-body">
                    <p><strong>Total Pasar:</strong> {{ $statistics['markets'] }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-success text-white">
                    <h5>Statistik Berita</h5>
                </div>
                <div class="card-body">
                    <p><strong>Total Berita:</strong> {{ $statistics['news'] }}</p>
                    <p><strong>Berita Terpublikasi:</strong> {{ $statistics['published_news'] }}</p>
                    <p><strong>Berita Draf:</strong> {{ $statistics['draft_news'] }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Events -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-warning">
                    <h5 class="text-white">Event Mendatang</h5>
                </div>
                <div class="card-body">
                    @if ($upcomingEvents->count() > 0)
                        <ul class="list-group">
                            @foreach ($upcomingEvents as $event)
                                <li class="list-group-item">
                                    <strong>{{ $event->judul }}</strong> -
                                    {{ \Carbon\Carbon::parse($event->tanggal_acara)->format('d M Y') }}
                                    <a href="{{ route('events.admin.show', $event->id) }}" class="btn btn-outline-primary btn-sm float-right">Detail</a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-muted">Tidak ada event mendatang.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
