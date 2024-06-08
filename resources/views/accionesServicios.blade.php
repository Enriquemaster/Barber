<x-app-layout>
{{--      @vite(['resources/css/app.css', 'resources/js/app.js'])--}}



<div class="p-10 bg-black">
        <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">

  <div class="bg-[#242222] md:p-5 rounded-lg ">
                <div class="flex flex-col md:flex-row md:items-start">
                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white md:px-5 text-center text-xl md:text-2xl">SERVICIOS</h1>
                        <img src="{{ asset('Icons/Retos.png') }}" alt="login" class="w-1/3 md:w-10 hidden md:block" />
                    </div>

                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white text-center text-xl md:text-2xl">ADMINISTRAR SERVICIOS</h1>
                    </div>

                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                    <a href="/agregarServicios" class="bg-yellow-800 text-white py-1 px-2 rounded-lg">AGREGAR</a>
                    </div>
                </div>
            </div>
            
   <div class="xl:flex xl:justify-center xl:p-12">
    <div class="bg-zinc-900 p-4">
  <div class="bg-zinc-200 rounded-lg p-4 overflow-x-auto">
    

  <form action="{{ route('servicios') }}" method="GET" class="flex space-x-2 items-center mb-4">
        <input type="text" name="buscar" placeholder="Nombre del corte que desea buscar" class="border rounded px-2 py-1 w-80" value="{{ request()->input('buscar') }}">
        <button type="submit" class="bg-zinc-900 text-white px-4 py-2 rounded w-14 h-10">
          <img src="IMG/search.png" alt="search" aria-hidden="true" class="w-full h-full">
        </button>
      </form> 

    <table class="w-full sm:w-auto text-left">
      <thead>
        <tr class="border-b">
          <th class="py-2 px-4 font-bold text-zinc-800">CORTE</th>
            <th class="py-2 px-4 font-bold text-zinc-800">DESCRIPCIÓN</th>
          <th class="py-2 px-4 font-bold text-zinc-800">PRECIO</th>
          <th class="py-2 px-4 font-bold text-zinc-800">ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b">
 
        @foreach($servicios as $servicio)
        <tr class="border-b">
          <td class="border px-4 py-2">{{ $servicio->corte }}</td>
              <td class="border px-4 py-2">{{ $servicio->descripccion }}</td>
              <td class="border px-4 py-2">${{ $servicio->precio }}</td>
              <td class="border px-4 py-2">
              <livewire:Btn-Eliminar-Services :id="$servicio->id" />
              <td class="border px-4 py-2">
            <a href="{{ route('servicio.actualizar.formulario', $servicio->id) }}" class="bg-zinc-800 text-white py-1 px-2 rounded-lg">Actualizar</a> 
            </td>
      @endforeach
      
      </tbody>
    </table>
    <div class="flex justify-center items-center mt-4">
                {{ $servicios->links() }} 
            </div>



        </div>
  </div>
  </div>
  </div>
</div>
</div>
</div>
</div>
</x-app-layout>
