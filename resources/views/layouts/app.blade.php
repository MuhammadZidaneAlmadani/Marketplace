<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Disperindag')</title>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        header {
            background-color: #ffffff;
            padding: 1rem 0;
            border-bottom: 1px solid #ddd;
        }

        header .navbar-brand img {
            height: 50px;
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
        color: #004d26; /* Warna hijau lebih gelap */
        }



        footer {
            background-color: #28a745;
            color: white;
            padding: 2rem 0;
            margin-top: 4rem;
        }

        footer p {
            margin: 0;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

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
<<<<<<< HEAD
                        <li class="nav-item"><a class="nav-link" href="{{ url('/layanan') }}">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Hubungi Kami</a></li>
=======
                        <li class="nav-item"><a class="nav-link" href="#">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Hubungi Kami</a></li>
>>>>>>> 3d5000a0f2921cf7a8d81acf49579efd65777891
                    </ul>
                </div>  
            </nav>
        </div>
    </header>

    <!-- Main Content Section -->
    <div class="container mt-5">
        @yield('content')
    </div>

<<<<<<< HEAD
    <!-- Feature Section -->
<section class="feature-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4">
                    <i class="fas fa-briefcase-medical"></i>
                    <h3>Kasus Darurat</h3>
                    <p>Kami siap mendukung usaha Anda dengan cepat...</p>
                    <a href="{{ url('/kasus-darurat') }}" class="btn btn-success">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <i class="fas fa-calendar-alt"></i>
                    <h3>Jadwal Karyawan</h3>
                    <p>Dengan manajemen jadwal yang efektif...</p>
                    <a href="{{ url('/jadwal-karyawan') }}" class="btn btn-success">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <i class="fas fa-clock"></i>
                    <h3>Jam Buka</h3>
                    <p>Senin - Kamis 07:00 - 15:00...</p>
                    <a href="{{ url('/jam-buka') }}" class="btn btn-success">Pelajari Lebih Lanjut</a>
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
                <a href="{{ url('/berita-pasar') }}" class="btn btn-success">Pelajari Lebih Lanjut</a>
            </div>
            <div class="col-md-4 news-item">
                <i class="fas fa-chart-line"></i>
                <h5>Solusi Pemasaran Berkualitas</h5>
                <p>Kami siap membuat Anda berkembang...</p>
                <a href="{{ url('/solusi-pemasaran') }}" class="btn btn-success">Pelajari Lebih Lanjut</a>
            </div>
            <div class="col-md-4 news-item">
                <i class="fas fa-users"></i>
                <h5>Inovasi untuk Masyarakat</h5>
                <p>Fokus untuk mendukung Anda...</p>
                <a href="{{ url('/inovasi-masyarakat') }}" class="btn btn-success">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </div>
</section>


=======
>>>>>>> 3d5000a0f2921cf7a8d81acf49579efd65777891
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
