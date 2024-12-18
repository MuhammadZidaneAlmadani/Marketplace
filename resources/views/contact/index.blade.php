<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .logo-text {
            font-family: 'Black Ops One', sans-serif;
            font-weight: bold;
            font-size: 1.5rem;
            letter-spacing: 3.5px;
        }

        .logo-text .text-green {
            color: #007b32; /* Hijau */
        }

        .logo-text .text-darkgreen {
            color: #7d7e7e; /* Abu-abu gelap */
        }

        .info-section {
            padding: 50px 0;
        }

        .info-section h2 {
            font-weight: 600;
            margin-bottom: 20px;
        }

        .info-section p {
            font-size: 1.1rem;
            color: #6c757d;
        }

        .info-box {
            text-align: center;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .info-box i {
            font-size: 2.5rem;
            color: #343a40;
        }

        footer {
            background-color: #343a40; /* Warna gelap untuk footer */
            color: white;
        }

        footer p {
            margin: 0;
        }

        footer p a {
            color: #007b32; /* Hijau */
        }

        footer p a:hover {
            color: #7d7e7e; /* Abu-abu gelap */
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            height: 40px; /* Ukuran logo */
            margin-right: 10px;
        }

        .navbar-nav .nav-link {
            font-size: 1rem;
        }

    </style>
</head>
    <div class="content">
        <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logo_disperindag.png') }}" alt="Logo">
                    <span class="logo-text">
                        <span class="text-green">DISPE</span><span class="text-darkgreen">RINDAG</span>
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('pasar.index') }}">Pasar</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('berita.index') }}">Berita</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('acara.index') }}">Acara</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact.index') }}">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Breadcrumb -->
        <div class="relative py-6" style="background-image: url('{{ asset('images/Contact.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <!-- Konten -->
            <div class="relative container text-center text-white py-6">
                <h1 class="text-3xl font-bold">Contact Us</h1>
                <p>Home &gt; Contact Us</p>
            </div>
        </div>

   <!-- Contact Section -->
   <div class="container py-10">
    <div class="row">
        <!-- Map Section -->
        <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.583674915243!2d113.456123!3d-7.160003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e4ec17a1f123%3A0x1234567890abcdef!2sPamekasan!5e0!3m2!1sen!2sid!4v1234567890123" 
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>


            <!-- Form Section -->
            <div class="col-lg-6">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-2xl font-bold mb-6">Hubungi Kami</h2>
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf <!-- Token CSRF untuk keamanan -->
                        <div class="mb-4">
                            <label for="first-name" class="block text-sm font-semibold">Nama Panjang *</label>
                            <input type="text" id="first-name" name="first_name" required class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500">
                        </div>
                        <div class="mb-4">
                            <label for="last-name" class="block text-sm font-semibold">Nama Pendek *</label>
                            <input type="text" id="last-name" name="last_name" required class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-semibold">Email *</label>
                            <input type="email" id="email" name="email" required class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500">
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="block text-sm font-semibold">No Hp</label>
                            <input type="tel" id="phone" name="phone" class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500">
                        </div>
                        <div class="mb-4">
                            <label for="country" class="block text-sm font-semibold">Negara Tempat Tinggal</label>
                            <select id="country" name="country" class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500">
                                <option value="">Pilih...</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Rusia">Rusia</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-sm font-semibold">Pesan</label>
                            <textarea id="message" name="message" rows="4" class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Section -->
    <section class="info-section text-center py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="row justify-content-center">
                <!-- Phone Card -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0 rounded-lg transform hover:scale-105 transition-transform">
                        <div class="card-body py-5 d-flex align-items-center">
                            <div class="me-3">
                                <i class="fas fa-phone-alt text-green-600" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="text-start">
                                <h5 class="card-title text-lg font-semibold text-gray-800 mb-1">Hubungi Kami</h5>
                                <p class="card-text text-gray-600 mb-0">+(62) 1234 56789</p>
                                <p class="card-text text-gray-500">disperindag.pamekasan@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Location Card -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0 rounded-lg transform hover:scale-105 transition-transform">
                        <div class="card-body py-5 d-flex align-items-center">
                            <div class="me-3">
                                <i class="fas fa-map-marker-alt text-green-600" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="text-start">
                                <h5 class="card-title text-lg font-semibold text-gray-800 mb-1">Lokasi</h5>
                                <p class="card-text text-gray-600 mb-0">Jl. Raya Pamekasan-Sumenep</p>
                                <p class="card-text text-gray-500">Kec. Pademawu, Kab. Pamekasan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hours Card -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0 rounded-lg transform hover:scale-105 transition-transform">
                        <div class="card-body py-5 d-flex align-items-center">
                            <div class="me-3">
                                <i class="fas fa-clock text-green-600" style="font-size: 2.5rem;"></i>
                            </div>
                            <div class="text-start">
                                <h5 class="card-title text-lg font-semibold text-gray-800 mb-1">Jam Operasional</h5>
                                <p class="card-text text-gray-600 mb-0">Senin - Kamis: 07.00 - 15.00</p>
                                <p class="card-text text-gray-500">Jum'at: 07.00 - 13.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    <!-- Footer -->
<footer class="py-10 bg-dark text-white">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 text-sm">
        <div class="space-y-4">
            <h3 class="font-bold">Tentang Kami</h3>
            <p>kami hadir untuk mendorong usaha Anda dengan Pemasaran Berkualitas kami adalah memberikan cepat dan inovatif</p>
            <div class="flex justify-center md:justify-start mt-4 space-x-4">
                <a href="#" target="_blank" aria-label="Facebook">
                    <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="w-6 h-6">
                </a>
                <a href="#" target="_blank" aria-label="Twitter">
                    <img src="{{ asset('images/twitter.png') }}" alt="Twitter" class="w-6 h-6">
                </a>
                <a href="#" target="_blank" aria-label="Instagram">
                    <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="w-6 h-6">
                </a>
            </div>
        </div>
        <div class="space-y-4">
            <h3 class="font-bold">Tautan Cepat</h3>
            <ul>
                <li><a href="{{ route('pasar.index') }}" class="nav-link">Pasar</a></li>
                <li><a href="{{ route('berita.index') }}" class="nav-link">Berita</a></li>
                <li><a href="{{ route('acara.index') }}" class="nav-link">Acara</a></li>
                <li><a href="{{ route('contact.index') }}" class="nav-link">Hubungi Kami</a></li>
            </ul>
        </div>
        <div class="space-y-4">
            <h3 class="font-bold">Jam Buka</h3>
            <p>Senin - Kamis: 07.00 - 15.00<br>Jumat: 07.00 - 13.00</p>
        </div>
    </div>
    <div class="text-center mt-8">
        <p>&copy; 2024 DISPERINDAG KABUPATEN PAMEKASAN</p>
        <p>Alamat: Jl. Urip Sumoharjo No.2, Sumenep, Jawa Timur</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
