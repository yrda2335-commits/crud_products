<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 520px; margin: 3rem auto; padding: 0 1rem; }
        form { display: flex; flex-direction: column; gap: 1rem; }
        input { padding: 0.75rem; font-size: 1rem; }
        button { padding: 0.8rem 1rem; background: #2563eb; color: white; border: none; border-radius: 6px; cursor: pointer; }
        .error { color: #b91c1c; }
    </style>
</head>
<body>
    <h1>Register</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('/register') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
    </form>
</body>
</html>
