<x-app-layout>

    <div class="bg-black min-h-screen flex items-center justify-center p-4">
  <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="bg-zinc-900 p-6 rounded-lg flex flex-col justify-between bg-cover bg-center" style="background-image: url('IMG/Barber.jpg');">

   <!--  <div class="absolute inset-0 bg-cover bg-center opacity-50" style="background-image: url('Carrusel/Barber1.jpg');"></div>-->
      <div class="">
         <!-- Background image -->
        <h2 class="text-white text-3xl font-bold mb-2 opacity-200 ">Actualización del producto<span class="text-amber-600">  <br>BARBER HOUSE</span></h2>
     
      </div>
    </div>
    
    <div class="bg-zinc-900 p-6 rounded-lg flex flex-col justify-between">
      <!-- cuarto div-->
   <div class="flex flex-col space-y-4 ">
        <div class="bg-zinc-800 p-4 rounded-lg flex items-center justify-center">
          <div>
            <h3 class="text-amber-400 text-2xl bg-gradient-to-b from-amber-300 via-yellow-600 to-slate-100 bg-clip-text text-transparent font-bold" id="Eslogan3">Actualización del producto</h3>
          </div>
        </div>

     <!-- segundo div-->
    <div class="flex flex-col space-y-4">
        <div class="bg-zinc-800 p-4 rounded-lg flex items-center">     
        <div class="mb-4  justify-center text-xs">
            <div class="flex items-center justify-center" id="lol">
                 <input type="file" id="imagenInput" name="foto" class="hidden" accept="image/*">
                    <div class="bg-amber-400 w-24 h-24 relative rounded-full overflow-hidden">
                         <div id="imagenPreview" class="w-full h-full bg-cover bg-center"></div>
                        <button type="button" onclick="document.getElementById('imagenInput').click()" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-20 text-white hover:bg-opacity-50 transition">
                        </button>
                    </div>
            </div>
        </div>

          <div class=" px-4">
            <h3 class="p-2 text-amber-400 text-3xl font-thin" id="barbero">Cargar imagen del producto</h3>
            <p class="text-zinc-400 " id="contenido">Carga una imagen referente a el producto <br>lo mas clara posible. </p>
          </div>
        </div>


 <!-- tercer div-->
 <div class=" px-20 rounded-lg shadow-md w-full bg-zinc-800"> 
 <form action="{{ route('productos.actualizar', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
<div class="mb-4  justify-center">
<div class="flex items-center justify-center" id="lol">
<h1 class="p-2 text-amber-400 text-4xl font-normal" id="barbero" >Datos del producto</h1>
   
</div>
    <div class=" mr-2 mt-2">
        <label for="nombre" class="block text-lg italic font-sans-serif text-amber-400" id="contenido">Nombre del producto</label>
        <input type="text" id="nombre" name="nombre" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" value="{{ $producto->nombre }}" required>
        <span id="errorNombre" class="text-red-500 text-sm"></span>
    </div>
</div>


<div class="mb-4">
  <label for="descripccion" class="block text-lg italic font-sans-serif text-amber-400" id="contenido">Descripccion</label>
  <textarea id="descripccion" name="descripccion" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" rows="2" placeholder=""  required>{{ $producto->descripccion }}</textarea>
  <span id="errorDescripccion" class="text-red-500 text-sm"></span>
</div>



    <div class="mb-4">
        <label for="marca" class="block text-lg  italic font-sans-serif text-amber-400" id="contenido">Marca</label>
        <input type="text" id="marca" name="marca" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" placeholder="" value="{{ $producto->marca }}" required>
        <span id="errormarca" class="text-red-500 text-sm"></span>
    </div>
                   <div class="mb-4">
                            <label for="marca" class="block text-lg  italic font-sans-serif text-amber-400" id="contenido">Modelo</label>
                           <input type="text" id="modelo" name="modelo" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" placeholder="" value="{{ $producto->modelo }}" required>
                            <span id="errorModelo" class="text-red-500 text-sm"></span>
                   </div>

                   <div class="mb-16">
                            <label for="marca" class="block text-lg italic font-sans-serif text-amber-400 " id="contenido">precio</label>
                            <div class="relative">
                              <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-700">$</span>
                           <input type="text" id="precio" name="precio" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" placeholder="" value="{{ $producto->precio}}" required>
                           </div>
                           <span id="errorModelo" class="text-red-500 text-sm"></span>

                   </div>                
  </div>

   <!-- cuarto div-->
   <div class="flex flex-col space-y-4 flex justify-between items-center ">
        <div class=" p-4 rounded-lg flex items-center ">
         
          <div>
                <div class="flex justify-between items-center mb-4">
                    <button id="contenido" type="submit" class="font-sans-serif text-black px-8 py-2 mx-auto rounded-full focus:outline-none focus:ring focus:border-blue-300 bg-amber-400 font-bold">Actualizar</button>
                        <div class="flex relative">
                        </div>
                </div>
          </div>
        </div>
</div>
</div>


  </body>
</html>
</x-app-layout>

        <!-- Bootstrap JS y Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eMEnHw8gHEm02Ll6dPQndvqSMaL81gj9CSe5MAqN63pFpWqadqBQPYckJxXM+I1a" crossorigin="anonymous"></script>



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
   // Función para manejar el cambio en el input de la imagen
   function mostrarImagenPreview() {
            const input = document.getElementById('imagenInput');
            const preview = document.getElementById('imagenPreview');

            // Verifica si se seleccionó una imagen
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    // Asigna la imagen al fondo del contenedor
                    preview.style.backgroundImage = `url('${e.target.result}')`;
                };

                // Lee el contenido de la imagen seleccionada
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Asigna el evento de cambio al input de la imagen
        document.getElementById('imagenInput').addEventListener('change', mostrarImagenPreview);
    </script>




