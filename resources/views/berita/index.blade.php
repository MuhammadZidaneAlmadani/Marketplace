<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda - DISPERINDAG')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        /* Navbar Styling */
        .navbar-brand img {
            height: 40px;
        }

        .navbar-dark .nav-link {
            color: white !important;
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
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo_disperindag.png') }}" alt="Logo Disperindag">
                <span>DISPERINDAG</span>
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
    
    <div class="container mt-4">
        <h2 class="text-center mb-4">Daftar Berita</h2>
        @if($berita->isEmpty()) <!-- Gunakan $berita sesuai controller -->
            <p class="text-center">Tidak ada berita yang tersedia.</p>
        @else
            <div class="row">
                @foreach ($berita as $item) <!-- Gunakan $berita untuk iterasi berita -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            @if ($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->judul }}">
                            @else
                                <img src="{{ asset('images/default.jpg') }}" class="card-img-top" alt="Default Image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p class="card-text">{{ Str::limit($item->konten, 100) }}</p>
                                <p class="text-muted">{{ \Carbon\Carbon::parse($item->published_at)->format('d M Y') }}</p>
                                <a href="{{ route('berita.show', $item->id) }}" class="btn btn-outline-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 DISPERINDAG KABUPATEN PAMEKASAN</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>