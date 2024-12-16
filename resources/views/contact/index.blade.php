<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
<body class="bg-gray-100">
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
    <div class="bg-gray-200 py-6">
        <div class="container text-center">
            <h1 class="text-3xl font-bold">Contact Us</h1>
            <p class="text-gray-600">Home &gt; Contact Us</p>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container py-10 flex flex-wrap">
        <!-- Map -->
        <div class="w-full lg:w-1/2 px-4">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.583674915243!2d113.456123!3d-7.160003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e4ec17a1f123%3A0x1234567890abcdef!2sPamekasan!5e0!3m2!1sen!2sid!4v1234567890123" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"></iframe>
        </div>

        <!-- Contact Form -->
        <div class="w-full lg:w-1/2 px-4">
            <h2 class="text-2xl font-bold mb-6">Hubungi Kami</h2>
            <form action="#" method="POST" class="bg-white shadow-lg rounded-lg p-6">
                <div class="mb-4">
                    <label for="first-name" class="block text-sm font-semibold">First Name *</label>
                    <input type="text" id="first-name" name="first_name" required class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500">
                </div>
                <div class="mb-4">
                    <label for="last-name" class="block text-sm font-semibold">Last Name *</label>
                    <input type="text" id="last-name" name="last_name" required class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold">Email *</label>
                    <input type="email" id="email" name="email" required class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-semibold">Phone</label>
                    <input type="tel" id="phone" name="phone" class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500">
                </div>
                <div class="mb-4">
                    <label for="country" class="block text-sm font-semibold">Country of Residence</label>
                    <select id="country" name="country" class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500">
                        <option value="">Select...</option>
                        <option value="ID">Indonesia</option>
                        <option value="US">United States</option>
                    </select>
                </div>
                <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-lg">Contact Us</button>
            </form>
        </div>
    </div>

    <!-- Informasi Section -->
    <section class="info-section text-center">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="info-box">
                        <i class="fas fa-newspaper"></i>
                        <p>+(62) 1234 56789<br>info@company.com</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box">
                        <i class="fas fa-bullhorn"></i>
                        <p>Jl. Raya Pamekasan-Sumenep<br>Kec.Pademawu Kabupaten Pamekasan</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box">
                        <i class="fas fa-handshake"></i>
                        <p>Senin - Kamis   07.00 - 15.00<br>Jum’at   07.00 - 13.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-10">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 text-sm">
            <div class="space-y-4">
                <h3 class="text-white font-bold">Tentang Kami</h3>
                <p>kami hadir untuk mendorong<br>usaha Anda dengan<br>Pemasaran Berkualitas<br>kami adalah memberikan<br>cepat dan inovatif</p>
                <!-- Social Media Icons ditempatkan di sini -->
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
                <h3 class="text-white font-bold">Tautan Cepat</h3>
                <ul>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pasar.index') }}">Pasar</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('berita.index') }}">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('acara.index') }}">Acara</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact.index') }}">Hubungi Kami</a></li>
                </ul>
            </div>
            <div class="space-y-4">
                <h3 class="text-white font-bold">Jam Buka</h3>
                <p>Senin - Kamis: 07.00 - 15.00<br>Jumat: 07.00 - 13.00</p>
            </div>
        </div>

        <div class="text-center mt-8">
            <p>&copy; 2024 Disperindag | All Rights Reserved</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
