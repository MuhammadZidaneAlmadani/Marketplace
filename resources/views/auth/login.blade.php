<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Disperindag</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .login-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container img {
            width: 80px;
            margin-bottom: 1rem;
        }

        .login-container h1 {
            font-size: 24px;
            color: #003366;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .form-group {
            margin-bottom: 1rem;
            text-align: left;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 0.5rem;
            font-size: 14px;
            margin-top: 0.3rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-login {
            width: 100%;
            padding: 0.7rem;
            font-size: 16px;
            color: white;
            background-color: #003366;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 1rem;
        }

        .btn-login:hover {
            background-color: #002244;
        }

        .alert {
            padding: 0.75rem 1.25rem;
            border-radius: 5px;
            margin-bottom: 1rem;
            text-align: left;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="{{ asset('images/logo_disperindag.jpeg') }}" alt="Disperindag Logo">
        <h1>DISPERINDAG</h1>

        <!-- Pesan Sukses -->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <!-- Pesan Kesalahan -->
        @if ($errors->has('login'))
            <div class="alert alert-danger">
                {{ $errors->first('login') }}
            </div>
        @endif

        <!-- Daftar Kesalahan Validasi -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Login -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" value="{{ old('username') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>
</body>
</html>
