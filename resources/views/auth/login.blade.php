<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Styling untuk membuat tampilan login */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .login-container {
            background-color: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-container img {
            width: 80px;
            margin-bottom: 0.1rem;
        }

        .disperindag-title {
            font-weight: bold;
            font-size: 28px;
            background: linear-gradient(90deg, #004d00, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 1rem;
            letter-spacing: 2px;
            font-family: Arial, sans-serif;
        }

        .login-container h2 {
            font-size: 24px;
            margin-bottom: 1rem;
        }

        .form-group {
            margin-bottom: 1rem;
            text-align: left;
        }

        .form-group label {
            font-weight: bold;
            font-size: 14px;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 0.5rem;
            font-size: 14px;
            margin-top: 0.3rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .form-group a {
            font-size: 12px;
            color: #007bff;
            text-decoration: none;
        }

        .form-group a:hover {
            text-decoration: underline;
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
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 0.75rem 1.25rem;
            border-radius: 5px;
            margin-bottom: 1rem;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Logo Disperindag -->
        <img src="{{ asset('images/logo_disperindag.jpeg') }}" alt="Disperindag Logo">
        <h1 class="disperindag-title">DISPERINDAG</h1>
        <h2>Login</h2>

        <!-- Display error messages -->
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" required autofocus value="{{ old('username') }}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn-login">Sign in</button>
        </form>
    </div>
</body>
</html>
