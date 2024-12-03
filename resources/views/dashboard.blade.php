@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">

    <!-- Banner -->
    <div class="mb-12">
        <img src="{{ asset('images/banner.jpg') }}" alt="Disperindag Banner" class="w-full rounded-lg shadow-lg">
    </div>

    <!-- Info Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        @foreach($infoCards as $card)
        <div class="bg-green-600 text-white rounded-lg p-6 shadow-lg">
            <h2 class="text-xl font-bold mb-4">{{ $card['title'] }}</h2>
            <p class="mb-4">{!! $card['description'] !!}</p>
            <div class="flex justify-center">
                <a href="{{ $card['link'] }}" class="btn-custom">Pelajari Lebih Lanjut</a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Additional Information Section -->
    <div class="text-center mb-8">
        <h2 class="text-2xl font-bold mb-4">Kami Menyediakan Informasi Terkait</h2>
        <p class="text-gray-700 mb-6">Informasi dan situasi berita dari pasar.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($additionalInfo as $info)
        <div class="bg-gray-100 border border-gray-300 rounded-lg p-6 shadow-lg text-center">
            <h3 class="text-lg font-bold mb-4">{{ $info['title'] }}</h3>
            <p class="mb-4">{{ $info['description'] }}</p>
            <a href="{{ $info['link'] }}" class="btn-custom">Pelajari Lebih Lanjut</a>
        </div>
        @endforeach
    </div>
</div>
@endsection
