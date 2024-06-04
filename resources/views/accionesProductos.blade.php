<x-app-layout>

{{--  <head>--}}
{{--      --}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--      @vite(['resources/css/app.css', 'resources/js/app.js'])--}}

{{--  </head>--}}
<x-slot name="header">
    <h2 class="font-semibold text-xl text-white leading-tight">
        {{ __('Mis productos') }}
    </h2>
</x-slot>
<body>



    <div class="flex justify-center">
    <div class="xl:p-24 p-4">
  <div class="flex justify-between items-center mb-4">
    <div class="flex mx-auto space-x-32">
    <a href="/agregarProductos" class="bg-blue-500 text-white px-4 py-2 rounded">Agregar</a>

    <!-- buscador -->
 <div class="flex space-x-2 items-center">
          <form action="{{ route('productos') }}" method="GET" class="flex space-x-2 items-center">
            <input type="text" name="buscar" placeholder="Nombre del producto que desea buscar" class="border rounded px-2 py-1 w-80" value="{{ request()->input('buscar') }}">
            <button type="submit" class="bg-zinc-900 text-white px-4 py-2 rounded w-14 h-10">
              <img src="IMG/search.png" alt="search" aria-hidden="true" class="w-full h-full">
            </button>
          </form>
        </div>
      </div>
    </div>
  <table class="w-1/2 bg-zinc-900 text-white border-zinc-200 ml-20 rounded-lg sm:text-xs shadow-[0px_20px_207px_10px_rgba(183,_170,_32,_0.35)]">
    <thead>
      <tr>
        <th class="border px-4 py-2">Acciones</th>
        <th class="border px-4 py-2">Nombre</th>
        <th class="border px-4 py-2">Descripcción</th>
        <th class="border px-4 py-2">Marca</th>
        <th class="border px-4 py-2">Modelo</th>
        <th class="border px-4 py-2">Precio</th>
      </tr>
    </thead>
    <tbody>
    @foreach($productos as $producto)
      <tr>
        <td class="border px-4 py-4 flex">
            <livewire:delete-product :id="$producto->id" />
            <a href="{{ route('productos.actualizar.formulario', $producto->id) }}" class="bg-blue-500 text-white rounded ml-4 px-4 py-1">Actualizar</a>
        </td>

          <td class="border px-4 py-2">{{ $producto->nombre }}</td>
              <td class="border px-4 py-2">{{ $producto->descripccion }}</td>
              <td class="border px-4 py-2">{{ $producto->marca }}</td>
              <td class="border px-4 py-2">{{ $producto->modelo }}</td>
              <td class="border px-4 py-2">${{ $producto->precio }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <!-- Enlaces de paginación -->
 <div class="flex justify-center items-center mt-4">
                {{ $productos->links() }} <!-- Aquí se muestran los enlaces de paginación -->
            </div>
        </div>
  </div>




<!-- Modal -->
<div id="successModal" class="{{ session('success') ? '' : 'hidden' }} fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-4">Producto nuevo ><</h2>
        <p>El producto ha sido registrado correctamente.</p>
        <button onclick="closeModal()" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Cerrar</button>
    </div>
</div>

<script>
    function closeModal() {
        document.getElementById('successModal').classList.add('hidden');
    }
</script>
  </body>


</x-app-layout>
