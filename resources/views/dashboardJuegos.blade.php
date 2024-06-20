<x-app-layout>
   

<div
  class="min-h-screen bg-cover bg-center flex items-center justify-center"
  style="background-image: url(IMG/gaming-console.svg);"
>
  <div class="bg-beige p-8 rounded-lg shadow-lg max-w-4xl w-full mt-12 mb-12">
    <div class="flex justify-between items-center mb-4">
      <div class="flex space-x-4">
        <a class="bg-zinc-200 p-2 rounded" href="{{ route('verProductos') }}" >Productos</a>
        @role('Administrador')
        <a class="bg-zinc-200 p-2 rounded" href="{{ route('registrarProductos') }}" >Agregar Productos</a>
        <a class="bg-zinc-200 p-2 rounded" href="{{ route('accionesProductoss') }}" >Actualizar productos</a>
        @endrole
      </div>
      <div>
        <button class="bg-zinc-200 p-2 rounded">Español / 中文</button>
      </div>
    </div>
    <div class="text-center flex flex-col items-center">
      <img src="{{ asset('IMG/gaming-mouse.svg') }}" alt="Gameboy Image" class="w-32 h-32" crossorigin="anonymous" />
      <h1 class="text-4xl font-bold mb-2">La</h1>
      <h1 class="text-4xl font-bold mb-2">Mejor opción</h1>
      <h1 class="text-4xl font-bold mb-2">Para comprar</h1>
      <h1 class="text-4xl font-bold mb-2">Tus videojuegos</h1>
      <h1 class="text-4xl font-bold mb-2">Favoritos</h1>
    </div>
    <div class="flex justify-between items-center mt-4">
      <p class="text-sm">Designing Experiences Since 2015</p>
      <p class="text-sm">© 2023 Placeholder Text, Inc.</p>
    </div>
  </div>
</div>


<style>
  .bg-beige {
    background-color: #F5F5DC;
  }
</style>

</x-app-layout>
