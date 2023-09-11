<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Your Gradient -->
    <style>
        body {
            background-image: linear-gradient(to right, #3b82f6, #9333ea, #f472b6);
        }
    </style>
</head>
<body class="antialiased min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900 dark:text-white">
    <div class="text-center">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline-red-500">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="text-white">
            <h1 class="text-4xl font-bold mb-4 animate__animated animate__bounceIn">Welcome to Zobir Page</h1>
            <p class="text-lg animate__animated animate__fadeInUp">Experience the magic of Tailwind CSS</p>
        </div>
    </div>
</body>
</html>
