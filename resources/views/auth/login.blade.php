<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crafty Canvas</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("{{ asset('images/background.jpeg') }}"); 
        background-size: cover;
        background-position: center;
        color: white;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
        }
        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.5); /* Change border color for visibility */
        }
        .navbar-toggler-icon {
            background-color: rgba(255, 255, 255, 0.5); /* Change icon color for visibility */
        }
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .form-container {
            max-width: 400px; /* Limit form width */
            width: 100%; /* Full width on small screens */
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background for form */
        }
        .text-danger {
            font-size: 0.9rem; /* Slightly smaller font for error messages */
        }
        .form-label {
            text-align: left; /* Align labels to the left */
        }
        .form-check {
            text-align: left; /* Align remember me checkbox to the left */
        }

        .logo {
    width: 90px; /* Adjust width as needed */
    height: 90px; /* Set height equal to width for a perfect circle */
    border-radius: 100%; /* Make the logo circular */
    
    opacity: 0.3; /* Adjust opacity as needed */
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="">
        <img src="{{ asset('images/logo-1.jpeg') }}" alt="Crafty Canvas Logo" class="logo">
    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </nav>

    <div class="hero">
        <div class="form-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    @if (Route::has('password.request'))
                        <a class="text-decoration-none" href="">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button type="submit" class="btn btn-primary">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
