@extends('layouts.app')

@section('content')
<!-- Header -->
<header class="relative">
    <img src="/images/Contact.png" alt="Hubungi Kami" class="w-full h-72 object-cover">
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <h1 class="text-4xl lg:text-6xl text-white font-extrabold">Hubungi Kami</h1>
    </div>
</header>

<!-- Konten -->
<main class="py-12">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4 lg:px-12">
        <!-- Kolom Peta -->
        <div>
            <iframe
                class="w-full h-72 rounded-md shadow-lg"
                src="https://www.google.com/maps/embed?pb=YOUR_GOOGLE_MAPS_EMBED_URL"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <!-- Kolom Form -->
        <div class="bg-white p-8 rounded-md shadow-lg">
            <h2 class="text-2xl font-bold mb-6">Hubungi Kami</h2>

            <!-- Menampilkan pesan sukses setelah form berhasil disubmit -->
            @if (session('success'))
                <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form Kontak -->
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="first_name" class="block text-sm font-medium text-gray-700">Nama Depan *</label>
                    <input
                        type="text"
                        id="first_name"
                        name="first_name"
                        required
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-200"
                    >
                </div>

                <div class="mb-4">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Nama Belakang *</label>
                    <input
                        type="text"
                        id="last_name"
                        name="last_name"
                        required
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-200"
                    >
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-200"
                    >
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-200"
                    >
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                    <textarea
                        id="message"
                        name="message"
                        rows="4"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-200"
                    ></textarea>
                </div>

                <button
                    type="submit"
                    class="w-full bg-green-500 text-white py-2 rounded-md hover:bg-green-600 transition duration-200"
                >
                    Kirim
                </button>
            </form>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="bg-green-500 text-white py-12">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4 lg:px-12">
        <!-- Kolom Tentang Kami -->
        <div>
            <h3 class="text-xl font-bold mb-4">Tentang Kami</h3>
            <p class="text-sm leading-relaxed">
                Kami hadir untuk mendorong kemajuan usaha Anda dengan solusi pemasaran berkualitas.
            </p>
            <div class="flex space-x-4 mt-4">
                <a href="#"><img src="/icons/facebook.webp" alt="Facebook" class="w-6 h-6"></a>
                <a href="#"><img src="/icons/twitter.png" alt="Twitter" class="w-6 h-6"></a>
                <a href="#"><img src="/icons/instagram.png" alt="Instagram" class="w-6 h-6"></a>
                <a href="#"><img src="/icons/youtube.png" alt="YouTube" class="w-6 h-6"></a>
            </div>
        </div>

        <!-- Kolom Tautan Cepat -->
        <div>
            <h3 class="text-xl font-bold mb-4">Tautan Cepat</h3>
            <ul class="space-y-2">
                <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:underline">Tentang Kami</a></li>
                <li><a href="{{ route('services') }}" class="hover:underline">Layanan</a></li>
                <li><a href="{{ route('contact.index') }}" class="hover:underline">Hubungi Kami</a></li>
            </ul>
        </div>

        <!-- Kolom Jam Buka -->
        <div>
            <h3 class="text-xl font-bold mb-4">Jam Buka</h3>
            <ul class="text-sm">
                <li>Senin - Kamis: 07:00 - 15:00</li>
                <li>Jumat: 07:00 - 13:00</li>
                <li>Sabtu - Minggu: Tutup</li>
            </ul>
        </div>
    </div>

    <div class="text-center text-sm mt-8">
        &copy; Disperindag 2024 | All Rights Reserved by R2
    </div>
</footer>
@endsection
