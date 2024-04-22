<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vehicle Management</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
        }

        .welcome-container {
            background-image: url('{{ asset('images/welcome-bg.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .welcome-text {
            transform: translateY(-50%);
            opacity: 0;
            transition: transform 0.8s ease-out, opacity 0.8s ease-out;
        }

        .auth-text {
            transform: translateY(-50%);
            opacity: 0;
            transition: transform 0.8s ease-out, opacity 0.8s ease-out;
        }

        .welcome-container.loaded .welcome-text {
            transform: translateY(0);
            opacity: 1;
        }

        .welcome-container.loaded .auth-text {
            transform: translateY(0);
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="welcome-container justify-around sm:flex items-center max-sm:p-6">
        <div class="welcome-text">
            <h1 class="font-bold text-8xl max-sm:text-6xl text-white">Welcome back all...</h1>
            <h2 class="font-medium text-4xl max-sm:text-xl text-white py-8">Manage your vehicle now !</h2>
        </div>
        <div>
            @if (Route::has('login'))
                <nav class=" flex flex-1 max-sm:mt-9 auth-text gap-2">
                    @auth
                        <a href="{{ url('approval/dashboard') }}"
                            class=" rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="bg-white/10 text-lg font-semibold rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="bg-white/10 text-lg rounded-md font-semibold px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>


    </div>

    <script>
        window.onload = function() {
            document.querySelector('.welcome-container').classList.add('loaded');
        }
    </script>
</body>

</html>
