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
        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.6);
        }
        .text-danger {
            font-size: 0.9rem;
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
        <div class="form-container mt-5">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name Fields -->
                <div class="form-row mb-3">
                    <div class="col">
                        <label for="first_name" class="form-label">{{ __('First Name') }}</label>
                        <input id="first_name" class="form-control" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus autocomplete="first_name" />
                        @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                        <input id="last_name" class="form-control" type="text" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" />
                        @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Father's Name and Email Fields -->
                <div class="form-row mb-3">
                    <div class="col">
                        <label for="fathers_name" class="form-label">{{ __('Father\'s Name') }}</label>
                        <input id="fathers_name" class="form-control" type="text" name="fathers_name" value="{{ old('fathers_name') }}" required autocomplete="fathers_name" />
                        @error('fathers_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Phone and Country Fields -->
                <div class="form-row mb-3">
                    <div class="col">
                        <label for="phone" class="form-label">{{ __('Phone') }}</label>
                        <input id="phone" class="form-control" type="text" name="phone" value="{{ old('phone') }}" required autocomplete="tel" />
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="country" class="form-label">{{ __('Country') }}</label>
                        <input id="country" class="form-control" type="text" name="country" value="{{ old('country') }}" required autocomplete="country" />
                        @error('country')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- City and Address Fields -->
                <div class="form-row mb-3">
                    <div class="col">
                        <label for="city" class="form-label">{{ __('City') }}</label>
                        <input id="city" class="form-control" type="text" name="city" value="{{ old('city') }}" required autocomplete="city" />
                        @error('city')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="address" class="form-label">{{ __('Address') }}</label>
                        <input id="address" class="form-control" type="text" name="address" value="{{ old('address') }}" required autocomplete="address" />
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Password and Confirm Password Fields -->
                <div class="form-row mb-3">
                    <div class="col">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <a class="text-decoration-none" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
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
