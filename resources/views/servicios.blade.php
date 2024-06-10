<x-app-layout>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="bg-zinc-800 min-h-screen flex items-center justify-center">
  <div class="relative flex flex-col items-center justify-center w-full h-full">
    <img src="{{ asset('IMG/bg_servicio.png') }}" alt="Menu Board" class="w-full h-auto md:w-2/5 md:h-auto 0 p-8 ">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white p-4  ">

    <div class="flex flex-col mt-24 xl:mb-32 md:mt-12">
      <ul class="0">
      <h2 class="text-2xl mb-4 mx-8 font-dmserifdisplay">Servicios y paquetes</h2>


        @foreach($servicios as $servicio)
        <li class="mb-2 flex justify-between w-full sm:text-xs font-dmserifdisplay">
            <span>{{ $servicio->corte }}</span>
            <span class="">${{ $servicio->precio }}</span>
          </li>
        @endforeach
      </ul>
      </div>



    </div>
    <div class="flex justify-center items-center mt-4">
                {{ $servicios->links() }}
            </div>

  </div>

</div>

</x-app-layout>
