@role('Administrador')
<x-app-layout>
<div class="min-h-screen bg-cover bg-center flex items-center justify-center p-10 "
  style="background-image: url(IMG/gaming-console.svg);">
        <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">

  <div class="bg-[#242222] md:p-5 rounded-lg ">
                <div class="flex flex-col md:flex-row md:items-start font-dmserifdisplay">
                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white md:px-5 text-center text-xl md:text-2xl">PRODUCTOS</h1>
                    </div>

                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white text-center text-xl md:text-2xl">ADMINISTRAR VIDEOJUEGOS</h1>
                    </div>

                </div>
  </div>
   <div class="xl:flex xl:justify-center xl:p-12">
    <div class="bg-zinc-900 p-4">
  <div class="bg-zinc-200 rounded-lg p-4 overflow-x-auto">

    <table class="w-full sm:w-auto text-left">
      <thead>
        <tr class="border-b">
          <th class="py-2 px-4 font-bold text-zinc-800 font-bodoni text-sm">NOMBRE</th>
          <th class="py-2  px-4 font-bold text-zinc-800 font-bodoni text-sm">DESARROLLADOR </th>
          <th class="py-2  w-5/6 px-4 font-bold text-zinc-800 font-bodoni text-sm">DESCRIPCIÓN</th>
          <th class="py-2 px-4 font-bold text-zinc-800 font-bodoni text-sm">CONSOLA</th>
          <th class="py-2 px-4 font-bold text-zinc-800 font-bodoni text-sm">PRECIO</th>
          <th class="py-2 px-4 font-bold text-zinc-800 font-bodoni text-sm">IMAGEN</th>
          <th class="py-2 px-4 font-bold text-zinc-800 font-bodoni text-sm">ACCIONES</th>   
        </tr>
      </thead>
      <tbody>
        <tr class="border-b">


        @foreach($productos as $producto)
        <tr class="border-b">
          <td class="border px-4 py-2 font-bodoni text-xl">{{ $producto->nombre }}</td>
          <td class="border px-4 py-2 font-bodoni text-xl">{{ $producto->desarrollador }}</td>
              <td class="border px-4 py-2 font-bodoni text-xl">{{ $producto->descripcion }}</td>
              <td class="border px-4 py-2 font-bodoni text-xl">{{ $producto->consola }}</td>
              <td class="border px-4 py-2 font-bodoni text-xl">{{ $producto->precio }}</td>

              <td class="border px-4 py-2 font-bodoni text-xl"> <div><img src="data:image/jpeg;base64,{{ $producto->foto }}" alt="{{ $producto->nombre }}" class="img-fluid" /></div></td>

              <td class="border px-4 py-2">
              <a href="{{ route('productos.actualizar.formulario', $producto->id) }}" class="bg-blue-800 text-white py-1 px-2 rounded-lg font-bodoni text-xl ">Actualizar</a>

              <form action="{{ route('productos.eliminar', $producto->id) }}" method="POST" class="">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-800 text-white py-1 px-2 rounded-lg font-bodoni text-xl mt-2">Eliminar Producto</button>
            </form>
            </td>

            

          </tr>

      @endforeach


      </tbody>
    </table>
 
  </div>
  </div>
  </div>
</div>







</x-app-layout>
    @endrole


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
