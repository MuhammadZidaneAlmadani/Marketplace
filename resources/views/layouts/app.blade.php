<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pasar Pamekasan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/markets">Pasar</a></li>
                <li><a href="/informasi">Informasi</a></li>
                <li><a href="/layanan">Layanan</a></li>
                <li><a href="/hubungi">Hubungi Kami</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Dinas Perindustrian dan Perdagangan Kabupaten Pamekasan</p>
    </footer>
</body>
</html>
