<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editorial KANIMA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white">

{{--Navbar--}}
<nav class="bg-white">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo"/>
            <span class="self-center text-2xl font-semibold bg-clip-text text-transparent bg-gradient-to-r from-cyan-500 to-blue-500">KANIMA</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-cyan-500"
                aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 ">
                <li>
                    <a href="#"
                       class="lowercase text-xl bg-clip-text text-transparent bg-gradient-to-r from-cyan-500 to-blue-500"
                       aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#"
                       class="lowercase text-xl bg-clip-text text-transparent bg-gradient-to-r from-cyan-500 to-blue-500">About</a>
                </li>
                <li>
                    <a href="#"
                       class="lowercase text-xl bg-clip-text text-transparent bg-gradient-to-r from-cyan-500 to-blue-500">Services</a>
                </li>
                <li>
                    <a href="#"
                       class="lowercase text-xl bg-clip-text text-transparent bg-gradient-to-r from-cyan-500 to-blue-500">Pricing</a>
                </li>
                <li>
                    <a href="#"
                       class="lowercase text-xl bg-clip-text text-transparent bg-gradient-to-r from-cyan-500 to-blue-500">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- Gradiente div --}}
<div class="bg-gradient-to-r from-white to-cyan-500 h-1 mb-8">
</div>

@yield('content')

</body>
</html>
