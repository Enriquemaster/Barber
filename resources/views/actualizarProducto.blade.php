<x-app-layout>
   
<div
  class="min-h-screen flex items-center justify-center bg-cover bg-center"
  style="background-image: url('{{ asset('IMG/gaming-mouse.svg') }}');"
>
  <div class="bg-beige p-6 rounded-lg shadow-lg flex flex-col md:flex-row w-full max-w-4xl">
    <div class="w-full md:w-1/2">
      <img
        src="{{ asset('IMG/gaming-console.svg') }}"
        alt="Imagen de consola"
        class="w-full h-full object-cover rounded-lg"
      />
    </div>
    <div class="w-full md:w-1/2 p-4 bg-white">
      <h2 class="text-5xl font-bold mb-4">Actualizar producto</h2>
      <form action="{{ route('productos.actualizar', $producto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
          <label class="block text-lg font-medium mb-2" for="nombre">Nombre</label>
          <input class="w-full p-2 border border-zinc-300 rounded-lg" type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}" required />
        </div>
        <div class="mb-4">
          <label class="block text-lg font-medium mb-2" for="desarrollador">Desarrollador</label>
          <input class="w-full p-2 border border-zinc-300 rounded-lg" type="text" id="desarrollador" name="desarrollador" value="{{ $producto->desarrollador }}" required />
        </div>
        <div class="mb-4">
          <label class="block text-lg font-medium mb-2" for="descripcion">Descripción</label>
          <textarea class="w-full p-2 border border-zinc-300 rounded-lg" id="descripcion" name="descripcion" rows="4" required>{{ $producto->descripcion }}</textarea>
        </div>
        <div class="mb-4">
          <label class="block text-lg font-medium mb-2" for="consola">Consola</label>
          <input class="w-full p-2 border border-zinc-300 rounded-lg" type="text" id="consola" name="consola" value="{{ $producto->consola }}" required />
        </div>
        <div class="mb-4">
          <label class="block text-lg font-medium mb-2" for="precio">Precio</label>
          <input class="w-full p-2 border border-zinc-300 rounded-lg" type="number" id="precio" name="precio" value="{{ $producto->precio }}" required />
        </div>
        <div class="mb-4">
          <label class="block text-lg font-medium mb-2" for="foto">Subir Imagen</label>
          <input class="w-full p-2 border border-zinc-300 rounded-lg mb-8" type="file" id="foto" name="foto" accept="image/*">
        </div>
        <button class="w-full bg-blue-500 text-white p-2 rounded-lg">Actualizar producto</button>
      </form>
    </div>
  </div>
</div>
</x-app-layout>