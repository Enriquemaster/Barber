@extends('layouts.base')

@section('content')
    <div class="bg-black bg-cover bg-center bg-no-repeat bg-opacity-50 w-full h-full relative">
  <img src="{{ asset('IMG/Fondo2.png') }}"alt="Local" class="w-full h-full object-cover">
</div>
<h1 class="absolute md:top-72 top-72 left-20 right-20 md:left-40 md:right-40 text-white text-center Bodoni md:text-5xl">The Barber's House</h1>  
<div class="w-3/4 mx-auto text-justify mt-10 mb-10">
    <h1 class="text-white Bodoni text-xl">The Barber's House va más allá de ser simplemente una barbería. Desde su establecimiento en octubre de 2023, se ha comprometido a cultivar un estilo moderno-clásico, donde la personalización y la atención al cliente son nuestras joyas más preciadas. No solo proporcionamos servicios de calidad, sino que también ofrecemos una selección de productos profesionales para el cuidado del cabello. </h1>
    
</div>
<div class="w-3/4 mx-auto text-justify mt-10 mb-10">
    <h1 class="text-white Bodoni text-xl">"En The Barber's House, aspiramos a ser el referente líder en cuidado personal y estilo, destacándonos por servicios y productos de calidad. Buscamos expandir nuestra presencia en línea, ofreciendo experiencias únicas más allá de nuestras paredes. Queremos ser el destino preferido para aquellos que buscan no solo cortes excepcionales, sino una experiencia que fusiona modernidad y tradición. En The Barber's House, cada interacción cuenta, cada estilo importa, y cada cliente se va sintiéndose renovado y satisfecho."</h1>
</div>

<div class=" flex flex-nowrap items-center justify-center px-5">
           
            <div class="flex flex-col items-center mt-4 Bodoni">
                <a href="https://www.facebook.com/profile.php?id=61552573292963" class="text-white mx-2 text-2xl">Facebook</a>
                <p class="mx-auto text-center text-white p-5 md:text-xl Bodoni ">The Barber's House  </p>
            </div>
            
            <div class="flex flex-col items-center mt-4 Bodoni">
                <a href="https://www.instagram.com/thebarbershouse27/" class="text-white mx-2 text-2xl">Instagram</a>
                <p class="mx-auto text-center text-white p-5 md:text-xl Bodoni ">@thebarbershouse27 </p>
            </div>
            
            <div class="flex flex-col items-center mt-4 Bodoni">
                <a href="https://www.tiktok.com/@davidtec33" class="text-white mx-2 text-2xl">TikTok</a>
                <p class="mx-auto text-center text-white p-5 md:text-xl Bodoni ">@DavidTec33 </p>
            </div>
        </div>
@endsection