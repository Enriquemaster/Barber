@extends('layouts.base')

@section('content')

    <div class="bg-black bg-cover bg-center bg-no-repeat bg-opacity-50 w-full h-full relative px-20">
    <video autoplay muted loop class="w-full h-full object-cover opacity-50">
        <source src="VIDEO/Fondo1.mp4" type="video/mp4">
        Tu navegador no soporta la reproducción de videos.
    </video>
    </div>
    <h1 class="absolute md:top-96 top-72 md:left-40 md:right-40 text-white text-center Bodoni md:text-5xl" name="Eslogan" id="Eslogan">DONDE EL ARTE DE SER BARBERO LE DA <hr> <hr> DISTINCIÓN AL CABALLERO <hr></h1>
    <a  href="{{url('/agendar')}}" class="absolute bg-yellow-600 text-white text-xl px-5 rounded-full hover:bg-yellow-800 focus:outline-none focus:ring focus:border-blue-100 md:px-10 md:py-2 Bodoni top-1/4 left-1/4  md:top-1/2 md:left-1/2 md:transform md:-translate-x-1/2 md:-translate-y-1/2 md:translate-y-40 "name="agendar" id="agendar">Agendar cita</a>
 <div class="flex flex-col md:flex-row p-4 md:p-8 text-center md:text-left items-center w-full md:w-11/12 mx-auto">
       <div class="flex-1 md:mt-4 md:p-4 md:flex md:flex-col md:items-start">

            <h2 class="text-2xl md:text-4xl text-white text-center" id="titulo">INTRODUCCIÓN</h2>

           <div class="md:text-left mt-4 px-3">
              <p class=" text-white text-justify md:text-justify md:text-2xl montserrat md:px-6 indent-6" id="contenido"> The Barber's House va más allá de ser simplemente una barbería. Desde su establecimiento en octubre de 2023, se ha comprometido a cultivar un estilo moderno-clásico, donde la personalización y la atención al cliente son nuestras joyas más preciadas. No solo proporcionamos servicios de calidad, sino que también ofrecemos una selección de productos profesionales para el cuidado del cabello.
                </p>
            </div>
       </div>

       <div class="flex md:flex-col  md:items-center">
            <img src="{{ asset('IMG/imagen3.jpeg')}}" alt="Imagen 1" class="w-1/2 f-1/2 md:w-full md:h-auto  transform scale-80 p-4 mb-2 md:mb-0 mx-auto">
        </div>

        <div class="flex md:flex-col md:items-center">
            <div class="max-w-full">
               <img src="{{ asset('IMG/imagen1.jpeg')}}" alt="Imagen 2" class="h-auto transform scale-60 p-6 mb-2 md:mb-0">
           </div>
           <div class="max-w-full">
               <img src="{{ asset('IMG/imagen2.jpeg')}}" alt="Imagen 3" class="h-auto transform scale-60 p-6">
            </div>
       </div>
    </div>
    <div class="flex flex-col items-center justify-center p-10 bg-[#2E2E2E]">
        <div class="flex flex-col md:flex-row items-center mx-auto px-4 w-full">
            <div class="md:w-2/3">
                <h1 class="text-4xl font-bold mb-4 text-white">SERVICIOS DE <span class="text-yellow-500">BARBERÍA</span></h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700">
                    <ul class="list-disc list-inside space-y-2 text-white">
                        <li>Afeitado de cabeza</li>
                        <li>Corte de cabello</li>
                        <li>Grecas</li>
                        <li>Afeitado de barba</li>
                        <li>Arreglo de barba</li>
                        <li>Teñido de barba o cabello</li>
                        <li>Limpieza de ceja</li>
                    </ul>
                    <ul class="list-disc list-inside space-y-2 text-white">
                        <li>Limpieza de nariz y oídos</li>
                        <li>Arreglo o corte de bigote</li>
                        <li>Exfoliación de rostro</li>
                        <li>Mascarilla negra</li>
                        <li>Mascarilla negra con colágeno</li>
                        <li>Alta frecuencia (barba y cabello)</li>
                        <li class="font-bold">SERVICIOS PREMIUM</li>
                    </ul>
                </div>
                <button class="mt-6 bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Ver más</button>
            </div>
            <div class="md:w-1/3 flex justify-center">
                <div class="bg-yellow-500 rounded-full w-32 h-32 md:w-1/2 md:h-1/2 flex items-center justify-center">
                    <img src="{{ asset('IMG/Faro.png') }}" alt="Barber Pole" class="w-24 h-24 md:w-3/4 md:h-auto">
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center" x-data="{ current: 0, interval: null, images: ['IMG/Corte1.png', 'IMG/Corte2.png', 'IMG/Corte3.png', 'IMG/Corte4.png', 'IMG/Corte5.png', 'IMG/Corte2.png'] }" x-init="interval = setInterval(() => { current = (current + 1) % (images.length * 3) }, 3000)">
        <div class="w-3/4 overflow-hidden py-10">
            <h3 class="text-white text-center Bodoni md:text-3xl" id="titulo">Nuestro trabajo</h3>
            <div class="relative">
                <div class="flex transition-transform duration-500 ease-in-out" :style="{ transform: `translateX(-${(current % images.length) * 100 / 3}%)` }">
                    <template x-for="(image, index) in [...images, ...images, ...images]" :key="index">
                        <div class="w-1/3 flex-shrink-0 p-2">
                            <img :src="'{{ asset('') }}' + image" alt="Local" class="w-full">
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center ">
        <div class="w-3/4">
            <p class=" text-white text-justify md:text-justify montserrat md:px-6 md:text-2xl" id="contenido">En "The Barber's House", la precisión y la creatividad se combinan para dar vida a una amplia gama de cortes de cabello. Desde los estilos clásicos que resisten el paso del tiempo hasta las últimas tendencias</p>
        </div>
    </div>

    <div class="flex justify-center px-2 mt-10 mb-5">
        <div class="w-full lg:w-3/4">
            <h3 class="text-white text-center Bodoni md:text-3xl" id="titulo">Nuestro equipo de barberos</h3>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row justify-center p-4">
        <div class="mb-4 lg:mr-4"><h4 class="text-white text-center text-xl md:text-6xl Bodoni" id="barbero">David Alberto Tec Chi</h4><img src="{{ asset('IMG/Barbero1.jpg')}}" alt="Local" class="w-1/2 h-auto md:w-3/4 md:h-auto p-4 mx-auto"></div>
        <div><h4 class="text-white text-center text-xl md:text-6xl Bodoni" id="barbero" >Cristian de Jesus Chan</h4><img src="{{ asset('IMG/Barbero2.png')}}" alt="Local" class="w-1/2 h-auto md:w-3/4 md:h-auto p-4 mx-auto"></div>
    </div>

    <div class="bg-yellow-500 text-black p-8 flex flex-col md:flex-row items-center justify-center">
        <div class="md:w-1/2 flex justify-center">
            <img src="{{ asset('IMG/Tarjetas2.png')}}" alt="tarjeta" class="w-3/4 md:w-3/5">
        </div>
        <div class="md:w-1/2 mt-8 md:mt-0 md:ml-4 text-center md:text-left">
            <h1 class="text-2xl md:text-4xl font-bold">MEMBRESIA</h1>
            <h2 class="text-4xl md:text-6xl font-bold text-white">PREMIUM</h2>
            <h3 class="text-2xl md:text-3xl font-bold mt-8">¿CÓMO FUNCIONA?</h3>
            <ul class="text-lg md:text-xl mt-4 space-y-2">
                <li><span class="font-bold">SELECCIONA</span> la experiencia (servicio) a regalar y realiza el pago.</li>
                <li><span class="font-bold">COMPÁRTENOS</span> los datos de contacto de la persona a sorprender para enviarle su certificado de regalo virtual.</li>
            </ul>
            <p class="text-lg md:text-xl mt-4">Contamos con diferentes servicios que se adaptarán a cualquier gusto y presupuesto.</p>
            <button class="bg-black text-white py-2 px-4 mt-8 rounded-md">SABER MÁS</button>
        </div>
    </div>

    <div class="flex flex-col md:flex-row items-center  md:items-start bg-zinc-900 py-10">
        <div class="p-8 md:w-1/2 text-center">
            <h2 class="text-4xl font-bold text-zinc-800 dark:text-zinc-200">NUESTRO</h2>
            <h2 class="text-6xl font-bold text-yellow-500">HORARIO</h2>
            <div class="mt-4">
                <p class="text-xl text-yellow-500">LUNES A SÁBADO</p>
                <p class="text-2xl text-zinc-800 dark:text-zinc-200">10:00 HR - 20:30 HR</p>
            </div>
            <div class="mt-4">
                <p class="text-xl text-yellow-500">DOMINGO</p>
                <p class="text-2xl text-zinc-800 dark:text-zinc-200">10:00 HR - 16:00 HR</p>
            </div>
            <button class="mt-8 bg-yellow-500 text-white py-2 px-4 rounded-md">AGENDAR SERVICIO</button>
        </div>
        <div class="md:w-1/2">
            <h1 class="text-2xl text-center dark:text-zinc-200 md:p-7">Visítanos en nuestro establecimiento</h1>
            <div class=" flex justify-center items-center p-5 ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.6518024453931!2d-89.27080067708728!3d21.095462619780434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f542900220a787d%3A0x9f96845bc243d236!2z4oCcIHRoZSBiYXJiZXIncyBob3VzZTI34oCd!5e0!3m2!1ses!2smx!4v1717627479263!5m2!1ses!2smx" class="relative w-full h-full md:w-[500px] md:h-[250px]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
