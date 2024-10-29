<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h2>Reset Password</h2>

        {{-- Form untuk memasukkan password baru --}}
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="email" name="email" value="{{ $email ?? old('email') }}" required autofocus>
            <input type="password" name="password" required placeholder="New Password">
            <input type="password" name="password_confirmation" required placeholder="Confirm Password">
            <button type="submit">Reset Password</button>
        </form>
        
    </div>
</body>
</html>
