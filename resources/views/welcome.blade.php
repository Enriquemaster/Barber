@extends('layouts.base')

@section('content')
    
    <div class="bg-black bg-cover bg-center bg-no-repeat bg-opacity-50 w-full h-full relative">
        <img src="IMG/Fondo4.png" alt="fondo" class="w-full h-full object-cover opacity-50">
    </div>
    <h1 class="absolute md:top-96 top-72 md:left-40 md:right-40 text-white text-center Bodoni md:text-5xl">DONDE EL ARTE DE SER BARBERO LE DA DISTINCIÓN AL CABALLERO</h1>
    <a  href="{{url('/agendar')}}" class="absolute bg-yellow-600 text-white text-xl px-5 rounded-full hover:bg-yellow-800 focus:outline-none focus:ring focus:border-blue-100 md:px-10 md:py-2 Bodoni top-1/4 left-1/4  md:top-1/2 md:left-1/2 md:transform md:-translate-x-1/2 md:-translate-y-1/2 md:translate-y-40 ">Agendar cita</a>

    <div class="flex flex-col md:flex-row p-4 md:p-8 text-center md:text-left items-center w-full md:w-11/12 mx-auto">
        <div class="flex-1 md:mt-4 md:p-4 md:flex md:flex-col md:items-start">
            
            <h2 class="text-2xl md:text-4xl text-white Bodoni text-center">INTRODUCCIÓN</h2>
       
            <div class="md:text-left mt-4 px-3">
                <p class=" text-white text-justify md:text-justify montserrat md:px-6">
                    The Barber's House va más allá de ser simplemente una barbería. Desde su establecimiento en octubre de 2023, se ha comprometido a cultivar un estilo moderno-clásico, donde la personalización y la atención al cliente son nuestras joyas más preciadas. No solo proporcionamos servicios de calidad, sino que también ofrecemos una selección de productos profesionales para el cuidado del cabello.
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
    <div class="flex justify-center">
       <div class="w-3/4">
        <h3 class="text-white text-center Bodoni md:text-3xl">Nuestro trabajo</h3>
        <div class="flex flex-nowrap p-4">
        <div><img src="{{ asset('IMG/Corte1.png')}}" alt="Local" class="w-11/12"></div>
        <div><img src="{{ asset('IMG/Corte2.png')}}" alt="Local" class="w-11/12"></div>
        <div><img src="{{ asset('IMG/Corte3.png')}}" alt="Local" class="w-11/12"></div>
        <div><img src="{{ asset('IMG/Corte4.png')}}" alt="Local" class="w-11/12"></div>
        <div><img src="{{ asset('IMG/Corte5.png')}}" alt="Local" class="w-11/12"></div>
       </div>
       </div>
    </div>
    <div class="flex justify-center ">
        <div class="w-3/4">
            <p class=" text-white text-justify md:text-justify montserrat md:px-6">En "The Barber's House", la precisión y la creatividad se combinan para dar vida a una amplia gama de cortes de cabello. Desde los estilos clásicos que resisten el paso del tiempo hasta las últimas tendencias</p>
        </div>
    </div>
    </div>      

    <div class="flex justify-center px-2 mt-10 mb-5">
        <div class="w-full lg:w-3/4">
            <h3 class="text-white text-center Bodoni md:text-3xl">Nuestro equipo de barberos</h3>
        </div>
    </div>
    
    <div class="flex flex-col lg:flex-row justify-center p-4">
        <div class="mb-4 lg:mr-4"><h4 class="text-white text-center text-xl md:text-2xl Bodoni">David Alberto Tec Chi</h4><img src="{{ asset('IMG/Barbero1.jpg')}}" alt="Local" class="w-1/2 h-auto md:w-full md:h-auto p-4 mx-auto"></div>
        <div><h4 class="text-white text-center text-xl md:text-2xl Bodoni">Cristian de Jesus Chan</h4><img src="{{ asset('IMG/Barbero2.png')}}" alt="Local" class="w-1/2 h-auto md:w-full md:h-auto p-4 mx-auto"></div>
    </div>    
@endsection