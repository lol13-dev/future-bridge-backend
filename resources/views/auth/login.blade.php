<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | FutureBridge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card shadow-sm p-4" style="width: 400px;">
        <h3 class="text-center mb-4">FutureBridge Login</h3>

        @if ($errors->any())
            <div class="alert alert-danger text-center">{{ $errors->first() }}</div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Log In</button>
        </form>
        <div class="text-center mt-3">
            <a href="{{ route('register') }}" class="text-decoration-none">Create an account</a>
        </div>
    </div>
</body>
</html>