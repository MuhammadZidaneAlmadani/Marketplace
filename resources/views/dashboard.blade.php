@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">

    <!-- Banner -->
    <div class="mb-12 text-center">
        <img src="{{ asset('images/logo_disperindag.jpeg') }}" alt="Disperindag Banner" class="w-full rounded-lg shadow-lg mb-4">
        <h1 class="text-3xl font-bold text-green-600">DISPERINDAG</h1>
    </div>

    <!-- Info Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        @foreach($infoCards as $card)
        <div class="bg-green-600 text-white rounded-lg p-6 shadow-lg">
            <h2 class="text-xl font-bold mb-4">{{ $card['title'] }}</h2>
            <p class="mb-4">{!! $card['description'] !!}</p>
            <div class="flex justify-center">
                <a href="{{ $card['link'] }}" class="bg-white text-green-600 px-4 py-2 rounded-md font-semibold hover:bg-gray-200 transition">Pelajari Lebih Lanjut</a>
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
            <a href="{{ $info['link'] }}" class="bg-green-600 text-white px-4 py-2 rounded-md font-semibold hover:bg-green-700 transition">Pelajari Lebih Lanjut</a>
        </div>
        @endforeach
    </div>

    <!-- Hubungi Kami Section -->
    <div class="text-center mt-12">
        <a href="{{ route('contact.index') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700 transition">
            Hubungi Kami
        </a>
    </div>
</div>
@endsection
