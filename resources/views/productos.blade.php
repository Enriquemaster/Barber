<x-app-layout>
<div class="bg-black bg-cover bg-center bg-no-repeat bg-opacity-50 w-full h-full relative px-28">
  <img src="{{ asset('IMG/dash-Cliente3.png') }}" alt="Local" class="w-full h-full object-cover">
</div>
    <h1 class="absolute md:top-20 top-20 left-20 right-20 md:left-40 md:right-40 text-yellow-500 font-bold text-center Bodoni md:text-5xl border-2 border-yellow-500" style="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: black;">Nuestros productos</h1>
 <div class="flex-1 p-4 bg-black items-center w-11/12 mx-auto mt-5">
 <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
    @foreach($productos as $producto)
        <div class="tarjeta rounded-lg shadow p-4 transition duration-300 ease-in-out bg-black hover:bg-zinc-800 text-white shadow-[8px_13px_238px_80px_rgba(45,_44,_42,_0.4)]">
            <div class="flex items-center justify-center" id="imagenquequieroguardar ">
                <div class="bg-[#B1796C] w-52 h-52 relative rounded-full overflow-hidden shadow-[0px_2px_36px_5px_rgba(232,_167,_43,_0.72)]">
                    <img src="data:image/jpeg;base64,{{ $producto->foto }}" alt="" class="w-full h-full object-cover">
                </div>
            </div>
            <h1 class="text-xl font-bold mt-4 text-center font-bodoni">{{ $producto->nombre }}</h1>
            <p class="mt-2 mb-6 text-center font-bodoni">Descripcción: {{ $producto->descripccion }}</p>
            <p class="mt-2 mb-6 text-center font-bodoni">Marca: {{ $producto->marca }} </p>
            <p class="mt-2 mb-6 text-center font-bodoni">Modelo: {{ $producto->modelo }} </p>
            <p class="mt-2 text-center font-bodoni"> Precio: ${{ $producto->precio }}</p>

        </div>
    @endforeach
      <!-- Enlaces de paginación -->
      <div class="flex justify-center items-center mt-4">
                {{ $productos->links() }} <!-- Aquí se muestran los enlaces de paginación -->
            </div>
        </div>
  </div>
</x-app-layout>
