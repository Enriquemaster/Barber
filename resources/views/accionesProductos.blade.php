<x-app-layout>
{{--      @vite(['resources/css/app.css', 'resources/js/app.js'])--}}

<<<<<<< HEAD
{{--  </head>--}}
    <div class="p-10 bg-black">
        <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">
    <div class="bg-[#242222] md:p-5 rounded-lg ">
        <div class="flex flex-col md:flex-row md:items-start">
            <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                <h1 class="text-white md:px-5 text-center text-xl md:text-2xl">MIS RETOS</h1>
                <img src="{{ asset('Icons/Retos.png') }}" alt="login" class="w-1/3 md:w-10 hidden md:block" />
            </div>

            <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                <h1 class="text-white text-center text-xl md:text-2xl">ADMINISTRAR RETOS</h1>
            </div>

            <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                <livewire:AddChallenge/>
            </div>
        </div>
    </div>
<body>
=======


<div class="p-10 bg-black">
        <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">

  <div class="bg-[#242222] md:p-5 rounded-lg ">
                <div class="flex flex-col md:flex-row md:items-start">
                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white md:px-5 text-center text-xl md:text-2xl">PRODUCTOS</h1>
                        <img src="{{ asset('Icons/Retos.png') }}" alt="login" class="w-1/3 md:w-10 hidden md:block" />
                    </div>

                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white text-center text-xl md:text-2xl">ADMINISTRAR PRODUCTOS</h1>
                    </div>

                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                    <a href="/agregarProductos" class="bg-yellow-800 text-white py-1 px-2 rounded-lg">Agregar</a>
                    </div>
                    
                </div>

                
            </div>
            

  
   <div class="xl:flex xl:justify-center xl:p-12">

    <div class="bg-zinc-900 p-4">
  <div class="bg-zinc-200 rounded-lg p-4 overflow-x-auto">
    

  <form action="{{ route('productos') }}" method="GET" class="flex space-x-2 items-center mb-4">
        <input type="text" name="buscar" placeholder="Nombre del producto que desea buscar" class="border rounded px-2 py-1 w-80" value="{{ request()->input('buscar') }}">
        <button type="submit" class="bg-zinc-900 text-white px-4 py-2 rounded w-14 h-10">
          <img src="IMG/search.png" alt="search" aria-hidden="true" class="w-full h-full">
        </button>
      </form>

    <table class="w-full sm:w-auto text-left">
      <thead>
        <tr class="border-b">
          <th class="py-2 px-4 font-bold text-zinc-800">NOMBRE</th>
          <th class="py-2 px-4 font-bold text-zinc-800 relative">
            <span class="border-r-2 border-blue-500 pr-2">DESCRIPCION</span>
          </th>
          <th class="py-2 px-4 font-bold text-zinc-800">MARCA</th>
          <th class="py-2 px-4 font-bold text-zinc-800">MODELO</th>
          <th class="py-2 px-4 font-bold text-zinc-800">PRECIO</th>
          <th class="py-2 px-4 font-bold text-zinc-800">ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b">
      

        @foreach($productos as $producto)
        <tr class="border-b">
          <td class="border px-4 py-2">{{ $producto->nombre }}</td>
              <td class="border px-4 py-2">{{ $producto->descripccion }}</td>
              <td class="border px-4 py-2">{{ $producto->marca }}</td>
              <td class="border px-4 py-2">{{ $producto->modelo }}</td>
              <td class="border px-4 py-2">${{ $producto->precio }}</td>
              <td class="border px-4 py-2">
              <livewire:delete-product :id="$producto->id" />
            <td class="border px-4 py-2">
            <a href="{{ route('productos.actualizar.formulario', $producto->id) }}" class="bg-zinc-800 text-white py-1 px-2 rounded-lg">Actualizar</a> 
            </td>
            </td>
          </tr>

      @endforeach
      
       
      </tbody>
    </table>
    <div class="flex justify-center items-center mt-4">
                {{ $productos->links() }} 
            </div>
        </div>
  </div>
  </div>

  </div>

  
</div>
>>>>>>> 471866dccc5f139cf7742e734b66dbf19f27aaaf



</div>

</div>
</div>




    <!--<div class="flex justify-center">
    <div class="xl:p-24 p-4">
  <div class="flex justify-between items-center mb-4">
    <div class="flex mx-auto space-x-32">
    <a href="/agregarProductos" class="bg-blue-500 text-white px-4 py-2 rounded">Agregar</a>-->

    <!-- buscador
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
  
 <div class="flex justify-center items-center mt-4">
                {{ $productos->links() }} 
            </div>
        </div>
  </div>
  </div>




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
  </body>-->













        </div>
    </div>
</x-app-layout>
