@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <!-- Header -->
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-green-700">Dinas Perindustrian dan Perdagangan Kabupaten Pamekasan</h1>
    </div>

    <!-- Banner -->
    <div class="mb-8">
        <img src="{{ asset('images/banner.jpg') }}" alt="Disperindag" class="w-full rounded-lg shadow-lg">
    </div>

    <!-- Info Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-green-600 text-white rounded-lg p-6 shadow-lg">
            <h2 class="text-xl font-bold mb-4">Kasus Darurat</h2>
            <p class="mb-4">Kami siap mendukung usaha Anda dengan cepat, bahkan dalam Kasus Darurat. Solusi Pemasaran Berkualitas dan Inovasi untuk Masyarakat adalah prioritas kami.</p>
            <a href="#" class="bg-white text-green-600 px-4 py-2 rounded font-bold shadow hover:bg-gray-100 transition">Pelajari Lebih Lanjut</a>
        </div>
        <!-- Card 2 -->
        <div class="bg-green-600 text-white rounded-lg p-6 shadow-lg">
            <h2 class="text-xl font-bold mb-4">Jadwal Karyawan</h2>
            <p class="mb-4">Dengan manajemen Jadwal Karyawan yang efektif, kami memastikan layanan kami selalu optimal untuk Anda.</p>
            <a href="#" class="bg-white text-green-600 px-4 py-2 rounded font-bold shadow hover:bg-gray-100 transition">Pelajari Lebih Lanjut</a>
        </div>
        <!-- Card 3 -->
        <div class="bg-green-600 text-white rounded-lg p-6 shadow-lg">
            <h2 class="text-xl font-bold mb-4">Jam Buka</h2>
            <p class="mb-4">Senin - Kamis: 07:00 - 15:00 <br> Jum'at: 07:00 - 13:00</p>
            <a href="#" class="bg-white text-green-600 px-4 py-2 rounded font-bold shadow hover:bg-gray-100 transition">Pelajari Lebih Lanjut</a>
        </div>
    </div>
</div>
@endsection
