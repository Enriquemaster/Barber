
<x-app-layout>
   

<div class="bg-yellow-200 py-24 mx-4 mt-4 rounded-lg px-4 text-center">
    <div class="relative inline-block">
        <h1 class="text-7xl font-bold text-black font-bodoni">Los mejores productos al mejor precio</h1>
       
    </div>
    <p class="mt-4 text-3xl text-black font-bodoni">¡Ve por tu billetera antes de que se agoten!</p>
</div>



<div class="bg-white py-12 px-4 text-center mt-4 mx-4 rounded-lg">
    <h2 class="text-5xl font-bold text-black font-bodoni">Estos son nuestros productos existentes</h2>

    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        @foreach($productos as $producto)
        <div class="bg-white shadow-md p-6 rounded-lg">
            <div class="w-full flex justify-center mb-4">
                <img src="data:image/jpeg;base64,{{ $producto->foto }}" alt="{{ $producto->nombre }}" class="img-fluid rounded-lg" />
            </div>

            <h1 class="border px-4 py-2 font-bodoni text-xl">{{ $producto->nombre }}</h1>
            <h1 class="border px-4 py-2 font-bodoni text-xl">Consola: {{ $producto->desarrollador }}</h1>
            <h1 class="border px-4 py-2 font-bodoni text-xl">{{ $producto->descripcion }}</h1>
            <h1 class="border px-4 py-2 font-bodoni text-xl">Sistema: {{ $producto->consola }}</h1>
            <h1 class="border px-4 py-2 font-bodoni text-xl">Precio: {{ $producto->precio }}USD</h1>
            <p class="mt-2 text-black">Limitado a existencias.</p>
        </div>
        @endforeach
    </div>
</div>
</div>

</x-app-layout>
