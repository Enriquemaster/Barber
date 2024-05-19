@extends('layouts.base')

@section('content')
<div class="bg-black bg-cover bg-center bg-no-repeat bg-opacity-50 w-full h-full relative">
  <img src="{{ asset('IMG/Fondo3.png') }}" alt="Local" class="w-full h-full object-cover">
</div>
<h1 class="absolute md:top-72 top-72 left-20 right-20 md:left-40 md:right-40 text-white text-center Bodoni md:text-5xl">Nuestros productos</h1>  
 <div class="flex-1 p-4 bg-black items-center w-11/12 mx-auto mt-5">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 p-4">
            <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-black hover:bg-zinc-800 text-white">
                <img class="w-full h-72 object-cover mb-4 rounded-lg" src="{{ asset('IMG/Producto1.png') }}"  alt="Producto 1">
                <p class="text-white text-justify p-5 ">Pomada DON JUAN “MATE FINISH ” de  400 gr </p>
                <p class="mx-auto text-center text-white p-5 text-xl Bodoni">$150.00 MX  </p>
                <button   class="bg-white hover:bg-zinc-300 text-black font-bold py-2 px-5 rounded block w-54 mx-auto">Apartar</button>
            </div>

            <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-black hover:bg-zinc-800 text-white">
                <img class="w-full h-72 object-cover mb-4 rounded-lg" src="{{ asset('IMG/Producto2.png') }}" alt="Producto 2">
                <p class="text-white text-justify p-5 ">Pomada DON JUAN “MEDIUM SHINE ” de  200 gr </p>
                <p class="mx-auto text-center text-white p-5 text-xl Bodoni">$140.00 MX  </p>
                <button   class="bg-white hover:bg-zinc-300 text-black font-bold py-2 px-5 rounded block w-54 mx-auto">Apartar</button>
            </div>


            <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-black hover:bg-zinc-800 text-white">
                <img class="w-full h-72 object-cover mb-4 rounded-lg" src="{{ asset('IMG/Producto3.png') }}" alt="Producto 3">
                <p class="text-white text-justify p-5 ">Pomada DON JUAN “hIDE  SHINE ” de  200 gr </p>
                <p class="mx-auto text-center text-white p-5 text-xl Bodoni">$120.00 MX  </p>
                <button   class="bg-white hover:bg-zinc-300 text-black font-bold py-2 px-5 rounded block w-54 mx-auto">Apartar</button>
            </div>

            <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-black hover:bg-zinc-800 text-white">
                <img class="w-full h-72 object-cover mb-4 rounded-lg" src="{{ asset('IMG/Producto4.png') }}" alt="Producto 4">
                <p class="text-white text-justify p-5 ">Pomada DON JUAN “HIGH SHINE-WAX” de  200 gr </p>   
                <p class="mx-auto text-center text-white p-5 text-xl Bodoni ">$110.00 MX  </p> 
                <button   class="bg-white hover:bg-zinc-300 text-black font-bold py-2 px-5 rounded block w-54 mx-auto">Apartar</button>
            </div>

            <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-black hover:bg-zinc-800 text-white">
                    <img class="w-full h-72 object-cover mb-4 rounded-lg" src="{{ asset('IMG/Producto5.png') }}" alt="Producto 5">
                    <p class="text-white text-justify p-5 ">Pomada DON JUAN “WATER SOLUBLE” de  200 gr </p>
                    <p class="mx-auto text-center text-white p-5 text-xl Bodoni ">$135.00 MX  </p>
                    <button   class="bg-white hover:bg-zinc-300 text-black font-bold py-2 px-5 rounded block w-54 mx-auto">Apartar</button>
                </div>

                <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-black hover:bg-zinc-800 text-white">
                    <img class="w-full h-72 object-cover mb-4 rounded-lg" src="{{ asset('IMG/Producto6.png') }}" alt="Producto 6">
                    <p class="text-white text-justify p-5 ">Pomada DON JUAN “MATE FINISH, MATTE CREAM ” de  200 gr </p>
                    <p class="mx-auto text-center text-white p-5 text-xl Bodoni">$125.00 MX  </p>
                    <button   class="bg-white hover:bg-zinc-300 text-black font-bold py-2 px-5 rounded block w-54 mx-auto">Apartar</button>
                </div>
</div>
</div>
@endsection