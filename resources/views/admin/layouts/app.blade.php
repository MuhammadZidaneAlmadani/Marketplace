<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin - Disperindag')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        header {
            background-color: #34403a;
            color: white;
            padding: 1rem 0;
        }

        header .navbar-brand img {
            height: 50px;
        }

        footer {
            background-color: #343a40;
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
    </style>
</head>
<body>
    <!-- Header Section (Navbar Admin) -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="{{ route('dashboard') }}">
                    <img src="{{ asset('logo_disperindag.jpeg') }}" alt="Logo Admin Disperindag">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('markets.admin.index') }}">Kelola Pasar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('news.admin.index') }}">Kelola Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('events.admin.index') }}">Kelola Event</a>
                        </li>
                        <li class="nav-item">
                            <!-- Form Logout di Navbar -->
                            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-link text-white">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content Section -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="container text-center">
            <p>ADMIN - DISPERINDAG KABUPATEN PAMEKASAN</p>
            <p>Alamat: Jl. Urip Sumoharjo No.2, Sumenep, Jawa Timur</p>
            <!-- Form Logout di Footer (Opsional, jika diperlukan di footer juga) -->
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-link text-white">Logout</button>
            </form>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
