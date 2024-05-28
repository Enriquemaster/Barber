
<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet"> 
    <script src="https://cdn.tailwindcss.com"></script> 
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}"> 
    @vite('resources/css/app.css')
    <title>TecNM Campus Motul</title> 
   
</head>

        <div class="md:container md:mx-auto md:w-5/12 md:max-w-screen-md py-10 sm:py- ">
          <div class=" p-16 rounded-lg shadow-md w-full bg-zinc-800">
                <form method="post" action="{{ route('registrar-producto') }}"  class="relative z-10" enctype="multipart/form-data">
                @csrf
                
<div class="mb-4  justify-center">
<div class="flex items-center justify-center" id="lol">
    <input type="file" id="imagenInput" name="foto" class="hidden" accept="image/*">
    <div class="bg-[#B1796C] w-52 h-52 relative rounded-full overflow-hidden">
        <div id="imagenPreview" class="w-full h-full bg-cover bg-center"></div>

        <button type="button" onclick="document.getElementById('imagenInput').click()" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-20 text-white hover:bg-opacity-50 transition">
          <br>  Selecciona la imagen </br>
            del producto
        </button>
    </div>
</div>

    <div class=" mr-2 mt-4">
        <label for="nombre" class="block text-sm italic font-sans-serif text-gray-600">Nombre del producto</label>
        <input type="text" id="nombre" name="nombre" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" placeholder="Inserta el nombre del producto" required>
        <span id="errorNombre" class="text-red-500 text-sm"></span>
    </div>
</div>


                <div class="mb-4">
                    <label for="text" class="block text-sm italic font-sans-serif text-gray-600 ">Descripccion</label>
                    <input type="text" id="descripccion" name="descripccion" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" placeholder="Inserta la descripcion del producto" required>
                     <span id="errorDescripccion" class="text-red-500 text-sm"></span>
               </div>
                

    <div class="mb-4">
        <label for="marca" class="block text-sm italic font-sans-serif text-gray-600">Marca</label>
        <input type="text" id="marca" name="marca" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" placeholder="Inserta el nombre de tu marca" required>
        <span id="errormarca" class="text-red-500 text-sm"></span>
    </div>

                    <!-- Inicio de la herramienta Radio button para Genero -->
                   <div class="mb-4">
                            <label for="marca" class="block text-sm italic font-sans-serif text-gray-600">Modelo</label>
                           <input type="text" id="modelo" name="modelo" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" placeholder="Inserta el modelo del producto" required>
                            <span id="errorModelo" class="text-red-500 text-sm"></span>
                   </div>

                   <div class="mb-16">
                            <label for="marca" class="block text-sm italic font-sans-serif text-gray-600">precio</label>
                           <input type="text" id="precio" name="precio" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" placeholder="Inserta el modelo del producto" required>
                            <span id="errorModelo" class="text-red-500 text-sm"></span>
                   </div>
                   
                        <div class="flex justify-between items-center mb-4">
                                <button id="registro"  type="submit" class="font-sans-serif text-white px-8 py-2 mx-auto rounded-full focus:outline-none focus:ring focus:border-blue-300 bg-[#B1796C] font-bold">Registro</button>
                                    <div class="flex relative">       
                                    </div>
                                    </div>
                </form>
                    </div>
        </div>  
</body>
</html> 
</x-app-layout>

        <!-- Bootstrap JS y Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eMEnHw8gHEm02Ll6dPQndvqSMaL81gj9CSe5MAqN63pFpWqadqBQPYckJxXM+I1a" crossorigin="anonymous"></script>

<script>
    function validarTextoEntrada(input, patron) {
    var texto = input.value
    var letras = texto.split("")
    var contieneNumeros = false;
    for (var x in letras) {
        var letra = letras[x]
        if (!(new RegExp(patron, "i")).test(letra)) {
            letras[x] = ""
            contieneNumeros = true;
        }
    }
    input.value = letras.join("")

    var errorNombreSpan = document.getElementById("errorNombre");
    errorNombreSpan.textContent = contieneNumeros ? "No se puede ingresar numeros." : "";
    }

var nombre = document.getElementById("nombre")
nombre.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[a-z ]")
})
</script>

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


   
