<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Contact Us</h2>

        <!-- Pesan Notifikasi -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <!-- Form Kontak -->
            <div class="col-md-6">
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country of Residence</label>
                        <select id="country" name="country" class="form-select" required>
                            <option value="" disabled selected>Select your country</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Singapore">Singapore</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Contact Us</button>
                </form>
            </div>

            <!-- Informasi dan Peta -->
            <div class="col-md-6">
                <h4>Hubungi Kami</h4>
                <p><strong>Alamat:</strong> Jl. Raya Pamekasan - Sumenep, Kecamatan Pademawu, Kabupaten Pamekasan, Jawa Timur 69323</p>
                <p><strong>Email:</strong> info@company.com</p>
                <p><strong>Telepon:</strong> +62 1234 56789</p>
                <p><strong>Jam Operasional:</strong> Senin - Kamis 07:00 - 15:00, Jumat 07:00 - 13:00</p>

                <!-- Peta Google Maps -->
                <div class="mb-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.755769530956!2d113.482468!3d-7.164941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e4f0d1111111%3A0x0000000000000000!2sJl.%20Raya%20Pamekasan%20-%20Sumenep!5e0!3m2!1sen!2sid!4v1614051234567"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
