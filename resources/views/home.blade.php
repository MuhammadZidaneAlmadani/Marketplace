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
        }

        .navbar-brand img {
            height: 40px;
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
            color: #7d7e7e; /* Warna hijau lebih gelap */
        }

        .hero {
            background: url('{{ asset('images/banner.jpg') }}') no-repeat center center/cover;
            color: white;
            padding: 120px 0;
            text-align: center;
        }

        .hero h1 {
            font-weight: 600;
            font-size: 2.5rem;
        }

        .hero p {
            font-size: 1.1rem;
            margin-top: 10px;
        }

        .carousel-item {
            text-align: center;
            padding: 20px;
        }

        .carousel-item h5 {
            font-weight: 600;
            margin-top: 15px;
        }

        .carousel-item p {
            color: #6c757d;
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
                    <li class="nav-item"><a class="nav-link" href="{{route ('home')}}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pasar.index') }}">Pasar</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('berita.index') }}">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('acara.index') }}">Acara</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('teras-pasar.index') }}">Teras Pasar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>DINAS PERINDUSTRIAN DAN PERDAGANGAN KABUPATEN PAMEKASAN</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
    </section>

    <!-- Carousel Section -->
    <div id="infoCarousel" class="carousel slide container my-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="info-box">
                    <h5>Kasus Darurat</h5>
                    <p>Kami siap mendukung usaha Anda dengan cepat, bahkan dalam Kasus Darurat.</p>
                    <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="info-box">
                    <h5>Jadwal Karyawan</h5>
                    <p>Dengan manajemen jadwal yang efektif, layanan optimal untuk Anda.</p>
                    <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="info-box">
                    <h5>Jam Buka</h5>
                    <p>Senin-Kamis: 07:00-15:00, Jumat: 07:00-13:00</p>
                    <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#infoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#infoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <!-- Informasi Section -->
    <section class="info-section text-center">
        <div class="container">
            <h2>Kami Menyediakan Informasi</h2>
            <p>Kami berkomitmen untuk mendukung pertumbuhan usaha Anda melalui strategi pemasaran yang efektif.</p>
            <p>dengan menyediakan layanan dan peluang terbaik untuk memajukan bisnis Anda</p>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="info-box">
                        <i class="fas fa-newspaper"></i>
                        <h5>Berita Pasar</h5>
                        <p>Kami memberikan berita terkini untuk mendukung perkembangan usaha Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box">
                        <i class="fas fa-bullhorn"></i>
                        <h5>Solusi Berkualitas</h5>
                        <p>Kami memastikan solusi pemasaran terbaik untuk Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box">
                        <i class="fas fa-handshake"></i>
                        <h5>Inovasi untuk Masyarakat</h5>
                        <p>Kami fokus memberikan inovasi terbaik dalam layanan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 DISPERINDAG KABUPATEN PAMEKASAN</p>
        <p>Alamat: Jl. Urip Sumoharjo No.2, Sumenep, Jawa Timur</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
