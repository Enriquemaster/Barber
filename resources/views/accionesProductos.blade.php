<x-app-layout>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite(['resources/css/app.css', 'resources/js/app.js'])

  </head>
  <body>
    <div class="xl:p-24 p-4">
  <div class="flex justify-between items-center mb-4">
    <div class="flex space-x-2">
      <button class="bg-blue-500 text-white px-4 py-2 rounded">Agregar</button>
    </div>
    <div class="flex space-x-2 items-center">
      <input type="text" placeholder="Buscar..." class="border rounded px-2 py-1">
      <button class="bg-zinc-200 text-zinc-700 px-4 py-2 rounded">
        <img src="https://placehold.co/20x20" alt="search" aria-hidden="true">
      </button>
      <select class="border rounded px-6 py-1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>

      </select>
      <button class="bg-zinc-200 text-zinc-700 px-4 py-2 rounded-lg">
        <img src="https://placehold.co/20x20" alt="settings" aria-hidden="true">
      </button>
    </div>
  </div>
  <table class="min-w-full bg-zinc-900 text-white border-zinc-200 rounded-lg sm:text-xs">
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
    @props(['id'])
    @foreach($productos as $producto)
      <tr>
        <td class="border px-4 py-2">
          <button class="bg-orange-500 text-white px-2 py-1 rounded">Editar</button>

            <livewire:delete-product :id="$producto->id" />


        </td>
          <td class="border px-4 py-2">{{ $producto->nombre }}</td>
        <td class="border px-4 py-2">{{ $producto->nombre }}</td>
              <td class="border px-4 py-2">{{ $producto->descripccion }}</td>
              <td class="border px-4 py-2">{{ $producto->marca }}</td>
              <td class="border px-4 py-2">{{ $producto->modelo }}</td>
              <td class="border px-4 py-2">{{ $producto->precio }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="flex justify-between items-center mt-4">
    <div class="flex space-x-2">
      <button class="bg-zinc-200 text-zinc-700 px-4 py-2 rounded">&lt;</button>
      <button class="bg-blue-500 text-white px-4 py-2 rounded">1</button>
      <button class="bg-zinc-200 text-zinc-700 px-4 py-2 rounded">&gt;</button>
    </div>
    <p>Se muestra desde 1 hasta 3 de 3 registros</p>
  </div>
</div>
  </body>

</html>

</x-app-layout>
