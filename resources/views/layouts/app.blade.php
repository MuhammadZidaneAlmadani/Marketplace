<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard Pasar Pamekasan')</title>

    <!-- CSS Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Custom CSS -->
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }
        header {
            background-color: #003366;
            padding: 1rem 0;
        }
        header nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 1.5rem;
        }
        header nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        header nav ul li a:hover {
            text-decoration: underline;
        }
        main {
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        footer {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="/dashboard" class="nav-link">Beranda</a></li>
                    <li class="nav-item"><a href="/markets" class="nav-link">Pasar</a></li>

                    <!-- Dropdown Informasi -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="informasiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="informasiDropdown">
                            <a class="dropdown-item" href="{{ route('news.index') }}">News</a>
                            <a class="dropdown-item" href="{{ route('events.index') }}">Event</a>
                        </div>
                    </li>

                    <li class="nav-item"><a href="/layanan" class="nav-link">Layanan</a></li>
                    <li class="nav-item"><a href="/hubungi" class="nav-link">Hubungi Kami</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Dashboard Pasar Pamekasan</p>
    </footer>

    <!-- JavaScript Bootstrap untuk Dropdown -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
