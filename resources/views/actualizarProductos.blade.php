@role('Administrador')
<x-app-layout>
<div class="bg-black min-h-screen flex items-center justify-center p-4">
    <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-zinc-900 p-6 rounded-lg flex flex-col justify-between bg-cover bg-center opacity-70"
            style="background-image: url('{{ asset('Carrusel/Barber1.jpg') }}');">
            <div>
                    <h2 class="text-white text-3xl font-bold mb-2 ">Actualización del producto<span class="text-amber-600"><br>BARBER HOUSE</span></h2>
                </div>
            </div>

            <div class="bg-zinc-900 p-6 rounded-lg flex flex-col justify-between">
                <div class="flex flex-col space-y-4">
                    <div class="bg-zinc-800 p-4 rounded-lg flex items-center justify-center">
                        <div>
                            <h3 class=" font-dmserifdisplay text-amber-400 text-2xl bg-gradient-to-b from-amber-300 via-yellow-600 to-slate-100 bg-clip-text text-transparent font-bold">Actualización del producto</h3>
                        </div>
                    </div>
                </div>

                
                <div class="px-20 rounded-lg shadow-md w-full bg-zinc-800 mt-6">
                    <form action="{{ route('productos.actualizar', $producto->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4 justify-center">
                            <div class="flex items-center justify-center">
                                <h1 class="p-2 text-amber-400 text-4xl font-normal">Datos del producto</h1>
                            </div>
                            <div class="mr-2 mt-2">
                                <label for="nombre" class="block text-lg italic text-amber-400">Nombre del producto</label>
                                <input type="text" id="nombre" name="nombre" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" value="{{ $producto->nombre }}" required>
                                <span id="errorNombre" class="text-red-500 text-sm"></span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="descripccion" class="block text-lg italic text-amber-400">Descripcción</label>
                            <textarea id="descripccion" name="descripccion" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" rows="2" required>{{ $producto->descripccion }}</textarea>
                            <span id="errorDescripccion" class="text-red-500 text-sm"></span>
                        </div>

                        <div class="mb-4">
                            <label for="marca" class="block text-lg italic text-amber-400">Marca</label>
                            <input type="text" id="marca" name="marca" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" value="{{ $producto->marca }}" required>
                            <span id="errorMarca" class="text-red-500 text-sm"></span>
                        </div>

                        <div class="mb-4">
                            <label for="modelo" class="block text-lg italic text-amber-400">Modelo</label>
                            <input type="text" id="modelo" name="modelo" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" value="{{ $producto->modelo }}" required>
                            <span id="errorModelo" class="text-red-500 text-sm"></span>
                        </div>

                        <div class="mb-16">
                            <label for="precio" class="block text-lg italic text-amber-400">Precio</label>
                            <div class="relative">
                                <input type="text" id="precio" name="precio"  class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" value="{{ $producto->precio }}" required>
                            </div>
                            <span id="errorPrecio" class="text-red-500 text-sm"></span>
                        </div>

                        <div class="flex flex-col space-y-4 flex justify-between items-center">
                            <div class="p-4 rounded-lg flex items-center">
                                <div>
                                    <div class="flex justify-between items-center mb-4">
                                        <button type="submit" class="text-black px-8 py-2 mx-auto rounded-md focus:outline-none focus:ring focus:border-blue-300 bg-amber-400 font-bold">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endrole

@role('Cliente|Cliente-premium')
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="bg-black h-screen flex items-center justify-center">
    <img src="{{ asset('IMG/robot-403.png') }}" alt="No estas autorizado para ver esto" class="h-1/2">
</div>
    @endrole




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




