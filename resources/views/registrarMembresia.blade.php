

@role('Cliente|Administrador')
<x-app-layout>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="bg-yellow-500 from-teal-900 to-teal-700 text-white p-8 mt-8 mx-8 ">
  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center">
    <div class="lg:w-1/2">
      <h1 class="text-4xl text-black font-bold mb-4 font-dmserifdisplay">
      REGÍSTRATE Y DESBLOQUEA BENEFICIOS EXCLUSIVOS
      </h1>
      <p class="mb-6 text-black  font-bodoni">
      ACCESO INMEDIATO A DESCUENTOS Y PROMOCIONES ESPECIALES<br>
    DISFRUTA DE VENTAJAS SOLO PARA MIEMBROS REGISTRADOS<br>
        TU TARJETA, TU CLAVE A UNA EXPERIENCIA PREMIUM<br>
      </p>
      <button class="bg-black text-white py-2 px-4 rounded-lg font-bodoni">SABER MÁS</button>
    </div>
    <div class="lg:w-1/2 mt-8 lg:mt-0">
    <img src="{{ asset('IMG/Tarjetas2.png')}}" alt="tarjeta" class="w-full h-full ">
    </div>
  </div>
</div>
<div class="bg-white text-zinc-900 p-8 mx-8 dark:bg-zinc-200">
  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center">
    <div class="lg:w-1/2">
      <h2 class="text-3xl font-bold mb-4 font-dmserifdisplay">MÁS RECOMPENSAS, MÁS EXCLUSIVIDAD, MÁS PARA TI</h2>
    </div>
    <div class="lg:w-1/2">

    <form id="formVerificarMembresia" action="{{ route('registrarMembresia') }}" method="POST">
    @csrf
    <input type="text" name="codigoTarjeta" placeholder="Ingrese los 8 dígitos de su tarjeta" class="border border-zinc-300 font-bodoni rounded-lg p-2 w-1/2 mb-6"/>
    <button type="submit" class="bg-black text-white py-2 px-4 rounded-lg font-bodoni">VERIFICAR MEMBRESÍA</button>
</form>

     <h1 class="mb-2 text-black font-bold font-montserrat"> ¿CÓMO INGRESAR LOS DÍGITOS DE TU TARJETA?</h1>
      <p class="mb-2 font-bodoni">
1.  Ubica Tu Tarjeta: Ten a mano la tarjeta proporcionada por nuestro local.<br>
2.  Revisa los Dígitos: Encuentra la serie de dígitos que se encuentra al frente de tu tarjeta.<br>
3.  Escribe con Cuidado: Ingresa los números sin espacios ni guiones. Asegúrate de que todos los dígitos sean correctos.<br>
4.  Verifica: Antes de continuar, verifica que hayas ingresado todos los números correctamente.<br>
      </p>

    </div>

  </div>
</div>
</x-app-layout>
@endrole


@role('Cliente-premium')
<x-app-layout>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="text-white py-8 mx-8 mt-8 mb-8 rounded-lg h-screen flex items-center bg-yellow-500">

  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center">

    <div class="lg:w-1/3 ml-2">

      <h1 class="xl:text-6xl font-bold mb-4 text-black font-dmserifdisplay">
      ¡BIENVENIDO AL CLUB PREMIUM!
      </h1>
      <h1 class="text-2xl font-bold mb-4 text-black font-bodoni ">
      @foreach ($data as $item)
      Te damos la bienvenida {{ $item['nombre_usuario'] }} a la barber house.
      </h1>

      <p class="mb-4 text-black font-bodoni xl:text-2xl">¡Felicidades! ahora tienes acceso a beneficios exclusivos.</p>
      <h1 class="mb-2 text-black font-bodoni xl:text-2xl"> Titular de la membresia: {{ $item['nombre_usuario'] }}</h1>
      <h1 class="mb-8 text-black font-bodoni xl:text-2xl "> Codigo de la membresia: {{ $item['code'] }}</h1>
      @endforeach
      <button class="bg-black text-white py-2 px-4 rounded-lg font-bodoni">Ir a los retos</button>
    </div>

    <div class="lg:w-2/3 mt-8 lg:mt-0 ">
      <img src="{{ asset('IMG/Tarjetas2.png')}}" alt="tarjeta" class="w-full h-full object-cover">
    </div>
  </div>
</div>
</x-app-layout>
@endrole




