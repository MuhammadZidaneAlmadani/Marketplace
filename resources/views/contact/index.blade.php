<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">

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
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126917.5123456789!2d110.39435836234689!3d-7.795580236246728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5796f697683f%3A0x123456789abcdef!2sDisperindag!5e0!3m2!1sen!2sid!4v1234567890"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- Kolom Form -->
            <div class="bg-white p-8 rounded-md shadow-lg">
                <h2 class="text-2xl font-bold mb-6">Kirim Pesan</h2>
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            required
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-200"
                        >
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            required
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-green-200"
                        >
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="4"
                            required
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
                    <li><a href="/" class="hover:underline">Home</a></li>
                    <li><a href="/tentang" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="/layanan" class="hover:underline">Layanan</a></li>
                    <li><a href="/hubungi" class="hover:underline">Hubungi Kami</a></li>
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

</body>
</html>
