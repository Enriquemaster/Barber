@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
@role('Administrador')

<div class="p-10 bg-black">
        <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">

  <div class="bg-[#242222] md:p-5 rounded-lg ">
                <div class="flex flex-col md:flex-row md:items-start">
                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white md:px-5 text-center text-xl md:text-2xl">MEMBRESIAS</h1>
                        <img src="{{ asset('Icons/Retos.png') }}" alt="login" class="w-1/3 md:w-10 hidden md:block" />
                    </div>

                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white text-center text-xl md:text-2xl">ADMINISTRAR MEMBRESIAS</h1>
                    </div>

                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5 bg-yellow-500 rounded-lg">
                    <form id="generarMembresiaForm" action="{{ route('accionesMembresias') }}" method="POST">
                     @csrf
                    <button type="submit">Generar Membresía</button>
                    </form>
                    </div>
                </div>
            </div>
            
   <div class="xl:flex xl:justify-center xl:p-12">
    <div class="bg-zinc-900 p-4">
  <div class="bg-zinc-200 rounded-lg p-4 overflow-x-auto">
    


    <table class="w-full sm:w-auto text-left">
      <thead>
        <tr class="border-b">
          <th class="py-2 px-4 font-bold text-zinc-800">Nombre del dueño <br> de la membresia </th>
          <th class="py-2 px-4 font-bold text-zinc-800">Caracteres de la membresia <br> (8 caracteres) </th>
          <th class="py-2 px-4 font-bold text-zinc-800">Eliminar <br> membresia </th>
        </tr>
      </thead>
      <tbody>
        @foreach($data1 as $item)
        <tr class="border-b">
        <td class="border px-4 py-2">{{ $item['nombre_usuario'] }}</td>
        <td class="border px-4 py-2">{{ $item['code'] }}</td>
        <td class="border px-4 py-2"> <livewire:eliminar-membresia :id="$item['id']" /></td>
            </tr>
            
            @endforeach
      </tbody>
    </table>

    <div class="bg-yellow-500 p-4 mt-4 rounded-lg">
   <h1 class="font-bold">codigos premium existentes</h1>

   @foreach($codigosNoVinculados as $codigo)
    <p>{{ $codigo->code }}</p>
@endforeach
   
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
@endrole

@role('Cliente|Cliente-premium')

<div class="bg-black h-screen flex items-center justify-center">
    <img src="{{ asset('IMG/robot-403.png') }}" alt="No estas autorizado para ver esto" class="h-1/2">
</div>
@endrole

