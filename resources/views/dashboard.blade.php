@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">

    <!-- Banner -->
    <div class="mb-12">
        <img 
            src="{{ asset('images/banner.jpg') }}" 
            alt="Disperindag Banner" 
            class="w-full rounded-lg shadow-lg"
        >
    </div>

    <!-- Info Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Loop through Info Cards -->
        @foreach($infoCards as $card)
        <div class="bg-green-600 text-white rounded-lg p-6 shadow-lg">
            <!-- Title -->
            <h2 class="text-xl font-bold mb-4">{{ $card['title'] }}</h2>
            
            <!-- Description -->
            <p class="mb-4">{!! $card['description'] !!}</p>
            
            <!-- Button -->
            <div class="flex justify-center">
                <a 
                    href="{{ $card['link'] }}" 
                    class="btn-custom"
                >
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
