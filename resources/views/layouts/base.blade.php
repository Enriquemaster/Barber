<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/FuncionesBarber.js') }}" defer></script>
    <title>Barberia</title>
</head>
<body class="bg-black">
    <nav class="bg-black w-full text-white flex flex-col md:flex-row md:text-center md:px-7 md:py-5 justify-center items-center">
{{--        <div class="absolute top-0 left-0 md:top-0 md:left-2">--}}
{{--            <a href="{{url('')}}"><img   src="{{ asset('IMG/TheBarber2.png')}}" alt="logotipo" class="w-32 h-10 md:w-64 md:h-auto" /></a>--}}
{{--        </div>--}}
        <div class="flex flex-col md:flex-row md:gap-5 mt-4 text-center Bodoni">
            <ul class="py-1 hover:underline">
                <li><a href="{{url('')}}">Inicio</a></li>
            </ul>
            <ul class="py-1 hover:underline">
                <li><a href="{{url('/conocenos')}}">Acerca de nosotros</a></li>
            </ul>
            <ul class="py-1 hover:underline">
                <li><a href="{{ route('register') }}">Registro</a></li>
            </ul>

            <ul class="py-1 hover:underline">
                <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
            </ul>
        </div>
    </nav>

    <div class="bg-zinc-700 md:mx-auto">
        <div class=" mx-auto mt-8">
            @yield('content');
        </div>
    </div>
</body>
<footer class="bg-[#272622] text-white w-full py-2 px-4 montserrat">
    <div class="container mx-auto justify-center">
        <div class="footer-content text-center">
            <a>© Copyright 2022 - The Barber's House</a>
        </div>
        <div class="footer-content text-center">
            <a>Barbería y cortes de cabello en Motul, Yucatán</a>
        </div>
        <div class="footer-content flex flex-nowrap items-center justify-center ">

            <div class="flex items-center mt-4">
                <a href="#" class="text-white mx-2">Facebook</a>
                <img src="IMG/Facebook.png" alt="Facebook Logo" class="w-[40px] h-[40px] mx-2">
            </div>

            <div class="flex items-center mt-4">
                <a href="#" class="text-white mx-2">Instagram</a>
                <img src="IMG/Instagram.png" alt="Instagram Logo" class="w-[40px] h-[40px] mx-2">
            </div>

            <div class="flex items-center mt-4">
                <a href="#" class="text-white mx-2">TikTok</a>
                <img src="IMG/Tik.png" alt="TikTok Logo" class="w-[40px] h-[40px] mx-2">
            </div>
        </div>
    </div>
</footer>
</html>
