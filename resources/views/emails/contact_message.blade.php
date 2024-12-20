<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru</title>
</head>
<body>
    <h1>Pesan Baru dari Pengunjung Website</h1>
    <p><strong>Nama Depan:</strong> {{ $contact->first_name }}</p>
    <p><strong>Nama Belakang:</strong> {{ $contact->last_name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Telepon:</strong> {{ $contact->phone ?? 'Tidak ada' }}</p>
    <p><strong>Negara:</strong> {{ $contact->country }}</p>
    <p><strong>Pesan:</strong></p>
    <p>{{ $contact->message }}</p>
</body>
</html>
