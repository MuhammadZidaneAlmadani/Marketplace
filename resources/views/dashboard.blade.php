@extends('layouts.app') <!-- Pastikan ada file layout yang bernama app.blade.php di folder layouts -->

@section('content')
    <!-- Market Highlights Section -->
    <section class="market-highlights">
        <h2>Pasar di Pamekasan</h2>
        <div class="market-cards">
            @foreach($markets as $market)
                <div class="market-card">
                    <img src="{{ $market->photo_url }}" alt="{{ $market->name }}">
                    <h3>{{ $market->name }}</h3>
                    <p>{{ Str::limit($market->history, 100) }}</p>
                    <a href="/pasar/{{ $market->id }}" class="btn">Pelajari Lebih Lanjut</a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Information Section -->
    <section class="information">
        <h2>Berita & Acara Terbaru</h2>
        <div class="info-cards">
            @foreach($news as $article)
                <div class="info-card">
                    <h4>{{ $article->title }}</h4>
                    <p>{{ Str::limit($article->content, 100) }}</p>
                    <a href="/informasi/{{ $article->id }}" class="btn">Baca Selengkapnya</a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
