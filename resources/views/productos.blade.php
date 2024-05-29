<x-app-layout>
<div class="bg-black bg-cover bg-center bg-no-repeat bg-opacity-50 w-full h-full relative px-28">
  <img src="{{ asset('IMG/Fondo3.png') }}" alt="Local" class="w-full h-full object-cover">
</div>
<h1 class="absolute md:top-72 top-72 left-20 right-20 md:left-40 md:right-40 text-white text-center Bodoni md:text-5xl">Nuestros productos</h1>  
 <div class="flex-1 p-4 bg-black items-center w-11/12 mx-auto mt-5">
 <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
    @foreach($productos as $producto)
        <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-black hover:bg-zinc-800 text-white">
            <div class="flex items-center justify-center" id="imagenquequieroguardar">
                <div class="bg-[#B1796C] w-52 h-52 relative rounded-full overflow-hidden">
                    <img src="{{ asset('storage/Recursos/' . $producto->foto) }}" alt="{{ $producto->nombre }}" class="w-full h-full object-cover">
                </div>
            </div>
            <h1 class="text-xl font-bold mt-4 text-center">{{ $producto->nombre }}</h1>
            <p class="mt-2 mb-6 text-center">{{ $producto->descripccion }}</p>
            <p class="mt-2 mb-6 text-center">{{ $producto->marca }} {{ $producto->modelo }}</p>
            <p class="mt-2 text-center">{{ $producto->precio }}</p>

            <div class="flex justify-center mt-4">
    <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
        Obtener
    </button>
</div>
        </div>
    @endforeach
</x-app-layout>