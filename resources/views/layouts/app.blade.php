<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Disperindag')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        /* Header */
        header {
            background-color: white;
            padding: 1rem 0;
            border-bottom: 2px solid #e8e8e8;
        }

        header .navbar-brand img {
            height: 50px;
        }

        /* Carousel */
        .carousel-item {
            position: relative;
            text-align: center;
            color: white;
            height: 400px;
            background-size: cover;
            background-position: center;
        }

        .carousel-item .carousel-caption {
            bottom: 30%;
        }

        .carousel-item h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        /* Feature Section */
        .feature-section {
            padding: 3rem 0;
            text-align: center;
        }

        .feature-section h3 {
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .feature-section .card {
            border: none;
            border-radius: 15px;
            background-color: #d4edda;
            color: #155724;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .feature-section .card:hover {
            transform: translateY(-10px);
        }

        .feature-section .card i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #28a745;
        }

        /* Informasi Berita */
        .news-section {
            padding: 3rem 0;
            text-align: center;
        }

        .news-section h3 {
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .news-section .news-item {
            margin-bottom: 2rem;
        }

        .news-section .news-item i {
            font-size: 2rem;
            color: #28a745;
        }

        .news-section .news-item h5 {
            font-weight: bold;
            margin-top: 1rem;
        }

        .news-section .news-item p {
            font-size: 0.9rem;
            color: #555;
        }

        /* Footer */
        footer {
            background-color: #28a745;
            color: white;
            padding: 2rem 0;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('logo.png') }}" alt="Disperindag Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Pasar</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Informasi
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">News</a>
                                <a class="dropdown-item" href="#">Event</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Hubungi Kami</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Carousel Section -->
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('{{ asset('images/banner.jpg') }}');">
                <div class="carousel-caption text-center">
                    <h1>DINAS PERINDUSTRIAN DAN PERDAGANGAN</h1>
                    <h1>KABUPATEN PAMEKASAN</h1>
                    <p>Lorem Ipsum adalah teks standar industri...</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Feature Section -->
    <section class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-4">
                        <i class="fas fa-briefcase-medical"></i>
                        <h3>Kasus Darurat</h3>
                        <p>Kami siap mendukung usaha Anda dengan cepat...</p>
                        <a href="#" class="btn btn-success">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <i class="fas fa-calendar-alt"></i>
                        <h3>Jadwal Karyawan</h3>
                        <p>Dengan manajemen jadwal yang efektif...</p>
                        <a href="#" class="btn btn-success">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <i class="fas fa-clock"></i>
                        <h3>Jam Buka</h3>
                        <p>Senin - Kamis 07:00 - 15:00...</p>
                        <a href="#" class="btn btn-success">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section">
        <div class="container">
            <h3>KAMI MENYEDIAKAN INFORMASI</h3>
            <p>Kami berkomitmen untuk mendukung pertumbuhan usaha Anda...</p>
            <div class="row">
                <div class="col-md-4 news-item">
                    <i class="fas fa-newspaper"></i>
                    <h5>Berita Pasar</h5>
                    <p>Kami siap memberikan dukungan cepat...</p>
                </div>
                <div class="col-md-4 news-item">
                    <i class="fas fa-chart-line"></i>
                    <h5>Solusi Pemasaran Berkualitas</h5>
                    <p>Kami siap membuat Anda berkembang...</p>
                </div>
                <div class="col-md-4 news-item">
                    <i class="fas fa-users"></i>
                    <h5>Inovasi untuk Masyarakat</h5>
                    <p>Fokus untuk mendukung Anda...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container text-center">
            <p>DISPERINDAG KABUPATEN PAMEKASAN</p>
            <p>Alamat: Jl. Urip Sumoharjo No.2, Sumenep, Jawa Timur</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
