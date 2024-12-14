<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @if($page == 'index')
            Halaman Utama Pasar
        @elseif($page == 'pengunjung')
            Halaman Pengunjung Pasar
        @endif
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .navbar-brand img {
            max-height: 40px;
        }

        .hero-section {
            text-align: center;
            padding: 60px 20px;
            background-color: #f8f9fa;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .market-section {
            margin-top: 50px;
        }

        .market-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
        }

        .market-card img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .market-card h5 {
            font-size: 1.1rem;
            margin: 10px 0;
        }

        .footer {
            margin-top: 50px;
            padding: 20px 0;
            background: #343a40;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="/images/logo_disperindag.png" alt="Logo">
                <span class="ms-2">DISPERINDAG</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('pasar.index') }}">Pasar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Acara</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Dinamis -->
    @if($page == 'index')
        <div class="hero-section">
            <h1>PASAR</h1>
            <h2>Selamat datang</h2>
            <p>Disini kalian bisa melihat berbagai macam pasar di Pamekasan</p>
            <form class="d-flex justify-content-center">
                <input type="email" class="form-control w-50 me-2" placeholder="Enter Your Email Here">
                <button class="btn btn-dark">Cari</button>
            </form>
        </div>
        <div class="container market-section">
            <h3 class="text-center mb-4">Pasar Di Pamekasan</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="market-card">
                        <img src="/images/pasar1.jpg" alt="Pasar 1">
                        <h5>Meningkatkan Visibilitas Online dengan SEO: Kisah Sukses Klien Sekawan Media</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="market-card">
                        <img src="/images/pasar2.jpg" alt="Pasar 2">
                        <h5>Menghubungkan Pasien dengan Layanan Kesehatan Melalui Aplikasi Mobile</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="market-card">
                        <img src="/images/pasar3.jpg" alt="Pasar 3">
                        <h5>Dari Klik ke Konversi: Strategi PPC yang Menghasilkan</h5>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('pasar.pengunjung') }}" class="btn btn-outline-dark">Lihat Pengunjung &rarr;</a>
            </div>
        </div>
    @elseif($page == 'pengunjung')
        <div class="container market-section">
            <h3 class="text-center mb-4">Daftar Pengunjung Pasar</h3>
            <p>Berikut adalah daftar pengunjung pasar yang tercatat:</p>
            <ul>
                <li>Pengunjung 1</li>
                <li>Pengunjung 2</li>
                <li>Pengunjung 3</li>
            </ul>
            <div class="text-center mt-4">
                <a href="{{ route('pasar.index') }}" class="btn btn-outline-dark">Kembali ke Halaman Utama</a>
            </div>
        </div>
    @endif

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 DISPERINDAG KABUPATEN PAMEKASAN</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
