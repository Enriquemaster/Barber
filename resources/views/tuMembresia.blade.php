{{--      @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
<x-app-layout>
@role('Cliente-premium')
<div class="bg-gradient-to-b from-teal-900 to-teal-700 text-white py-8 mx-8 mt-8 mb-8 rounded-lg h-screen flex items-center bg-yellow-500">
    
  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center">
    
    <div class="lg:w-1/3 ml-2">

      <h1 class="xl:text-6xl font-bold mb-4 text-black">
      ¡BIENVENIDO AL CLUB PREMIUM!
      </h1>
      <h1 class="text-2xl font-bold mb-4 text-black">
      @foreach ($data as $item)
     TE DAMOS LA BIENVENIDA {{ $item['nombre_usuario'] }} A LA BARBER HOUSE
      </h1>
      
      <p class="mb-4 text-black font-bold xl:text-2xl">¡FELICIDADES! AHORA TIENES ACCESO A BENEFICIOS EXCLUSIVOS.</p>
      <h1 class="mb-2 text-black font-bold xl:text-2xl"> TITULAR DE LA MEMBRESIA: {{ $item['nombre_usuario'] }}</h1>
      <h1 class="mb-8 text-black font-bold xl:text-2xl "> CODIGO DE LA MEMBRESIA: {{ $item['code'] }}</h1>
      @endforeach
      <button class="bg-black text-white py-2 px-4 rounded-lg">Ir a los retos</button>
    </div>

    <div class="lg:w-2/3 mt-8 lg:mt-0 ">
      <img src="{{ asset('IMG/Tarjetas2.png')}}" alt="tarjeta" class="w-full h-full object-cover">
    </div>
  </div>
</div>
@endrole
</x-app-layout>

