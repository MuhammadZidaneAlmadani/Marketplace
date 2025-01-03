<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda - DISPERINDAG')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Minimum tinggi layar penuh */
        }

        /* Navbar Styling */
        .navbar-brand img {
            height: 40px;
        }

        .navbar-dark .nav-link {
            color: white !important;
        }

        .logo-text {
            font-family: 'Black Ops One', sans-serif; /* Gunakan font Black Ops One */
            font-weight: bold;
            font-size: 2ch; /* Sesuaikan ukuran teks */
            letter-spacing: 3.5px; /* Spasi antar huruf */
        }

        .logo-text .text-green {
            color: #007b32; /* Warna hijau pertama */
        }

        .logo-text .text-darkgreen {
            color: #7d7e7e; /* Warna abu abu */
        }

        /* Hero Section */
        .hero {
            background: url('{{ asset('images/banner.jpg') }}') no-repeat center center/cover;
            color: white;
            padding: 150px 0;
            text-align: center;
        }

        .hero h1 {
            font-weight: 600;
            font-size: 3rem;
        }

        /* Informasi Section */
        .info-section {
            padding: 50px 0;
        }

        .info-section .info-card {
            text-align: center;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
        }

        .info-section .info-card i {
            font-size: 2rem;
            color: #007b32;
        }

        /* Company Profile Section */
        .company-profile {
            background-color: #007b32;
            color: white;
            padding: 60px 20px;
        }

        .company-profile h2 {
            font-weight: 600;
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: auto; /* Dorong footer ke bawah */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo_disperindag.png') }}" alt="Logo Disperindag">
                <span class="ms-2 logo-text">
                    <span class="text-green">DISPE</span><span class="text-darkgreen">RINDAG</span>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route ('home')}}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pasar.index') }}">Pasar</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('berita.index') }}">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('acara.index') }}">Acara</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('teras-pasar.index') }}">Teras Pasar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Daftar Pasar</h2>

        @if ($markets->isEmpty())
            <p class="text-center">Tidak ada pasar yang tersedia.</p>
        @else
            <div class="row">
                @foreach ($markets as $market)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            @if($market->foto_utama)
                                <img src="{{ asset('storage/' . $market->foto_utama) }}"
                                     class="card-img-top" alt="{{ $market->nama }}">
                            @else
                                <img src="{{ asset('images/default.jpg') }}"
                                     class="card-img-top" alt="Gambar Default">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $market->nama }}</h5>
                                <p class="card-text">{{ Str::limit($market->deskripsi, 100) }}</p>
                                <a href="{{ route('pasar.show', $market->id) }}"
                                   class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Paginasi -->
            <div class="d-flex justify-content-center mt-4">
                {{ $markets->links() }}
            </div>
        @endif
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 DISPERINDAG KABUPATEN PAMEKASAN</p>
        <p>Alamat: Jl. Urip Sumoharjo No.2, Sumenep, Jawa Timur</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
