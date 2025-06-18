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
    .hero {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .hero h1 {
        font-size: 3rem;
    }
    .hero p {
        font-size: 1.2rem;
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
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo-1.jpeg') }}" alt="Crafty Canvas Logo" class="logo">
    </a>
        <div class="collapse navbar-collapse justify-content-end">
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
        <h1>Welcome to Crafty Canvas</h1>
        <p>Build stunning portfolios that showcase your creativity and skills. Perfect for artists, designers, and professionals.</p>
        <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Get Started</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
