{{--      @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
<x-app-layout>
@role('Cliente-premium|Cliente|Administrador')
<div class=" to-teal-700 text-white py-8 mx-8 mt-8 mb-8 rounded-lg h-screen flex items-center bg-yellow-500">
    
  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center">
    
    <div class="lg:w-1/3 ml-2">

      <h1 class="text-5xl font-bold mb-4 text-black">
      ¡FALLO MEMBRESIA INVALIDA
      </h1>
      <h1 class="text-2xl font-bold mb-4 text-black">
      <p class="mb-4 text-black font-bold xl:text-2xl">ESTA MEMBRESIA YA HA SIDO USADA, POR FAVOR INSERTE OTRA O SOLICITE OTRA CON NOSOTROS .</p>
    </div>

    <div class="lg:w-2/3 mt-8 lg:mt-0 ">
      <img src="{{ asset('IMG/TarjetaFallo.png')}}" alt="tarjeta" class="w-full h-full object-cover">
    </div>
  </div>
</div>
@endrole
</x-app-layout>
