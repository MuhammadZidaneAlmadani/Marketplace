<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard Pasar Pamekasan')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Tambahkan beberapa styling dasar */
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

        header nav ul li {
            display: inline;
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

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
    </style>
=======
    <title>@yield('title', 'Dashboard Pasar Pamekasan')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
>>>>>>> a40f4c2aeff7d98976b75a8e8e3f939caa2df052
</head>
<body>
    <!-- Header Section -->
    <header>
<<<<<<< HEAD
        <div class="container">
            <nav>
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/markets">Pasar</a></li>
                    <li><a href="/informasi">Informasi</a></li>
                    <li><a href="/layanan">Layanan</a></li>
                    <li><a href="/hubungi">Hubungi Kami</a></li>
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
=======
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Pasar Pamekasan</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="/dasboard">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="/markets">Pasar</a></li>
                        <li class="nav-item"><a class="nav-link" href="/informasi">Informasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="/layanan">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="/hubungi">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-4">
>>>>>>> a40f4c2aeff7d98976b75a8e8e3f939caa2df052
        <p>&copy; 2024 Dinas Perindustrian dan Perdagangan Kabupaten Pamekasan</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
