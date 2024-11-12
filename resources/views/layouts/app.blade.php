<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>
    <!-- Header Section -->
    <header>
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
        <p>&copy; 2024 Dinas Perindustrian dan Perdagangan Kabupaten Pamekasan</p>
    </footer>
</body>
</html>
