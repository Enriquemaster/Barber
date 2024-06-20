<x-app-layout>
   
<div
  class="min-h-screen flex items-center justify-center bg-cover bg-center"
  style="background-image: url('IMG/gaming-mouse.svg');"
>
  <div class="bg-beige p-6 rounded-lg shadow-lg flex flex-col md:flex-row w-full max-w-4xl">
    <div class="w-full md:w-1/2">
      <img
        src="IMG/gaming-console.svg"
        alt="Placeholder Image"
        class="w-full h-full object-cover rounded-lg"
      />
    </div>
    <div class="w-full md:w-1/2 p-4 bg-white">
      <h2 class="text-5xl font-bold mb-4">Registro</h2>
      <form method="post" action="{{ route('registrarProductos') }}" class="relative z-10" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
          <label class="block text-1g font-medium mb-2" for="name">Nombre</label>
          <input class="w-full p-2 border border-zinc-300 rounded-lg" type="text"id="nombre"name="nombre" required/>
        </div>
        <div class="mb-4">
          <label class="block text-1g font-medium mb-2" for="developer">Desarrollador</label>
          <input class="w-full p-2 border border-zinc-300 rounded-lg"type="text"id="desarrolladorr"name="desarrollador"required/>
        </div>
        <div class="mb-4">
          <label class="block text-1g font-medium mb-2" for="descripcion">Descripción</label> <textarea class="w-full p-2 border border-zinc-300 rounded-lg" id="descripcion" name="descripcion" rows="4" required></textarea>
        </div>
        <div class="mb-4">
          <label class="block text-1g font-medium mb-2" for="consola">Consola</label>
          <input class="w-full p-2 border border-zinc-300 rounded-lg" type="text" id="consola" name="consola" required/>
        </div>
        <div class="mb-4">
          <label class="block text-1g font-medium mb-2" for="price">Precio</label>
          <input class="w-full p-2 border border-zinc-300 rounded-lg" type="text" id="precio" name="precio" required/>
        </div>

            <label class="block text-1g font-medium mb-2" for="image">Subir Imagen</label>
            <input class="w-full p-2 border border-zinc-300 rounded-lg mb-8" type="file" id="imagenInput" name="foto" class="hidden" accept="image/*">
          
        <button class="w-full bg-blue-500 text-white p-2 rounded-lg ">Registrar producto</button>
      </form>
    </div>
  </div>
</div>

</x-app-layout>