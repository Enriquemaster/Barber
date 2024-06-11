@role('Administrador')
<x-app-layout>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/app.css')

    <div class="bg-black min-h-screen flex items-center justify-center p-4">
  <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="bg-zinc-900 p-6 rounded-lg flex flex-col justify-between bg-cover bg-center opacity-70" style="background-image: url('Carrusel/Barber1.jpg');">

   <!--  <div class="absolute inset-0 bg-cover bg-center opacity-50" style="background-image: url('Carrusel/Barber1.jpg');"></div>-->
      <div class="">
         <!-- Background image -->
        <h2 class="text-white text-3xl font-bold mb-2 opacity-200 ">Registro del Servicio<span class="text-amber-600">  <br>BARBER HOUSE</span></h2>

      </div>
    </div>

    <div class="bg-zinc-900 p-6 rounded-lg flex flex-col justify-between">
      <!-- cuarto div-->
   <div class="flex flex-col space-y-4 ">
        <div class="bg-zinc-800 p-4 rounded-lg flex items-center justify-center">
          <div>
            <h3 class="text-amber-400 text-2xl bg-gradient-to-b from-amber-300 via-yellow-600 to-slate-100 bg-clip-text text-transparent font-bold font-dmserifdisplay" >Registro del servicio</h3>
          </div>
        </div>
    <form method="post" action="{{ route('registrar-servicio') }}"  class="relative z-10" enctype="multipart/form-data">

                  <!-- tercer div-->
                  <div class=" px-20 rounded-lg shadow-md w-full bg-zinc-800">

                  @csrf
                  <div class="mb-4  justify-center">
                  <div class="flex items-center justify-center" id="lol">
                  <h1 class="p-2 text-amber-400 text-4xl font-normal font-dmserifdisplay" >Datos del servicio</h1>

                  </div>
                      <div class=" mr-2 mt-2">
                          <label for="nombre" class="block text-lg  text-amber-400 font-bodoni">Nombre del corte</label>
                          <input type="text" id="corte" name="corte" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" placeholder="" required>
                          <span id="errorNombre" class="text-red-500 text-sm"></span>
                      </div>
                  </div>


                  <div class="mb-4">
                    <label for="descripccion" class="block text-lg  text-amber-400 font-dmserifdisplay">Descripcción</label>
                    <textarea id="descripccion" name="descripccion" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" rows="2" placeholder="" required></textarea>
                    <span id="errorDescripccion" class="text-red-500 text-sm"></span>
                  </div>

                   <div class="mb-16">
                            <label for="marca" class="block text-lg  text-amber-400 font-dmserifdisplay">precio</label>
                            <div class="relative">
                              <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-700">$</span>
                           <input type="text" id="precio" name="precio" class="w-3/4 sm:w-11/12 px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" placeholder="" required>
                           </div>
                           <span id="errorModelo" class="text-red-500 text-sm"></span>

                   </div>

                   <div class="flex flex-col space-y-4 flex justify-between items-center ">
        <div class=" p-4 rounded-lg flex items-center ">

          <div>
                <div class="flex justify-between items-center mb-4">
                    <button  type="submit" class="font-sans-serif text-black px-8 py-2 mx-auto rounded-md focus:outline-none focus:ring focus:border-blue-300 bg-amber-400 font-bold font-dmserifdisplay">Registro</button>
                        <div class="flex relative">
                        </div>
                </div>
          </div>
        </div>
    </div>
</div>

    </form>
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
