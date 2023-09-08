<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editorial KANIMA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen bg-gray-900">

{{-- Navbar --}}
<nav class="bg-blue-500 p-4">
    <div class="container mx-auto">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('build/assets/icono-d7cd26cb.png') }}" alt="icon" class="h-10 w-10 object-cover">
                <div class="text-white text-2xl font-semibold">
                    <a href="{{ route('home') }}">
                        Estrellas Literarias
                    </a>
                </div>
            </div>
            <div class="space-x-5">
                <a href="#" class="text-white hover:text-gray-200">About</a>
                <a href="#" class="text-white hover:text-gray-200">Services</a>
                <a href="#" class="text-white hover:text-gray-200">Blog</a>
                <a href="#" class="text-white hover:text-gray-200">Contact</a>
            </div>
        </div>
    </div>
</nav>

@yield('content')

{{--Footer--}}
<footer class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
        <div class="flex flex-col items-center justify-center">
            <p class="text-2xl font-semibold">¡Síguenos en las redes sociales!</p>
            <div class="flex space-x-4 mt-4">
                <a href="#" class="hover:text-gray-200">Facebook</a>
                <a href="#" class="hover:text-gray-200">Twitter</a>
                <a href="#" class="hover:text-gray-200">Instagram</a>
                <a href="#" class="hover:text-gray-200">LinkedIn</a>
            </div>
            <p class="mt-4">&copy; {{ date('Y') }} Editorial Estrellas Literarias</p>
        </div>
    </div>
</footer>

</body>
</html>
