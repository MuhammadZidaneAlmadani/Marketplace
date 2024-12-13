<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        header .navbar-brand img {
            max-height: 40px; /* Pastikan logo tidak terlalu besar */
            max-width: auto;
        }

        .logo-text {
            font-family: 'Black Ops One', sans-serif;
            font-weight: bold;
            font-size: 2ch;
            letter-spacing: 3.5px;
        }

        .logo-text .text-green {
            color: #007b32;
        }

        .logo-text .text-darkgreen {
            color: #bbbbbb;
        }

        .carousel-item {
            text-align: center;
        }

        .info-section h2 {
            margin-top: 50px;
        }

        .pmk{
            width: 5%;
        }

        .info-card {
            background: #f8f9fa;
            border-radius: 20px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .info-card i {
            font-size: 2rem;
            color: #282828;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img class="pmk" src="./images/logo_disperindag.png" alt="Logo Disperindag">
                <span class="logo-text ms-2">
                    <span class="text-green">DISPE</span><span class="text-darkgreen">RINDAG</span>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="pasar_pengunjung.html">Pasar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="text-center bg-light py-5" style="background-image: url('./images/banner.jpg'); background-size: cover; background-position: center;">
        <h1 class="text-white">DINAS PERINDUSTRIAN DAN PERDAGANGAN</h1>
        <h1 class="text-white">KABUPATEN PAMEKASAN</h1>
        <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>

    <!-- Carousel Section -->
    <div id="infoCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="info-card">
                    <h5>Kasus Darurat</h5>
                    <p>Kami siap mendukung usaha Anda dengan cepat, bahkan dalam Kasus Darurat.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="info-card">
                    <h5>Jadwal Karyawan</h5>
                    <p>Dengan manajemen Jadwal Karyawan yang efektif, kami memastikan layanan terbaik.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="info-card">
                    <h5>Jam Buka</h5>
                    <p>Senin - Kamis: 07.00 - 15.00, Jumat: 07.00 - 13.00</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#infoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#infoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Information Section -->
    <div class="container info-section text-center">
        <h2>Kami Menyediakan Informasi</h2>
        <p>Kami berkomitmen untuk mendukung pertumbuhan usaha Anda melalui strategi pemasaran efektif.</p>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="info-card">
                    <i class="fas fa-newspaper"></i>
                    <h5>Berita Pasar</h5>
                    <p>Kami siap memberikan informasi cepat tentang situasi terkini di pasar.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card">
                    <i class="fas fa-chart-line"></i>
                    <h5>Solusi Pemasaran</h5>
                    <p>Kami fokus memberikan solusi untuk mendukung bisnis Anda berkembang.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card">
                    <i class="fas fa-users"></i>
                    <h5>Inovasi</h5>
                    <p>Kami terus berinovasi untuk memberikan layanan terbaik kepada masyarakat.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 DISPERINDAG KABUPATEN PAMEKASAN</p>
        <p>Alamat: Jl. Urip Sumoharjo No.2, Sumenep, Jawa Timur</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
