<x-app-layout>

 <div class="flex items-center justify-center text-white text-5xl h-full">
 <html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="bg-zinc-900 text-white xl:p-8 rounded-lg space-y-4 h-full">
    <div class="flex flex-col md:flex-row items-center justify-between md:space-y-0 bg-zinc-900 rounded-lg ">
  <div class="relative flex flex-col items-center justify-center md:items-start md:w-3/4 bg-zinc-800 rounded-lg mr-4 md:h-60">
    <video autoplay muted loop class="w-full h-full object-cover opacity-50">
      <source src="VIDEO/Fondo1.mp4" type="video/mp4">
      Tu navegador no soporta la reproducción de videos.
    </video>
    <h1 class="absolute inset-0 flex items-center justify-center text-white text-3xl md:text-4xl"  id="titulodashboard">Barber Shop</h1>
    </div>


      
      <div class="bg-zinc-800 flex justify-center align-center text-white text-5xl md:w-1/4 rounded-lg ml-4">
      <p class="text-center " id="titulodashboard" >Obten tu membresia</p>
      <img src="https://placehold.co/200x200" alt="High-quality Icons" class="mt-4 mb-4">
      </div>
    </div>
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 ">
    <div class="bg-zinc-800 p-4 rounded-lg flex flex-col items-center">
      <p class="text-center" id="titulodashboard">Servicios</p>
      <img src="https://placehold.co/200x200" alt="High-quality Icons" class="mt-4 mb-4">
      <p class="text-center text-2xl" id="contenido">Disfrute de todos nuestros servicios</p>
    </div>
    <div class="bg-zinc-800 p-4 rounded-lg flex flex-col items-center">
      <p class="text-center " id="titulodashboard" >Productos</p>
      <img src="https://placehold.co/200x200" alt="High-quality Icons" class="mt-4 mb-4">
      <p class="text-center text-2xl" id="contenido">Los mejores productos a mejor precio</p>
    </div>
    <div class="bg-zinc-800 p-4 rounded-lg flex flex-col items-center">
      <p class="text-center" id="titulodashboard">Agenda tu cita</p>
      <img src="https://placehold.co/200x200" alt="High-quality Icons" class="mt-4 mb-4">
      <p class="text-center text-2xl" id="contenido">Agenda tu cita te estamos esperando</p>
    </div>

    <div class="bg-zinc-800 p-4 rounded-lg flex flex-col items-center">
      <p class="text-center" id="titulodashboard">Conoce a nuestros barberos</p>
<img src="https://placehold.co/200x200" alt="High-quality Icons" class="mt-4 mb-4">
<p class="text-center text-2xl" id="contenido">Barberos de confianza</p>
    </div>
  </div>
  
  <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:h-full">
    <div class="bg-zinc-800 p-4 rounded-lg flex flex-col items-center">
      <p class="text-center">pensando en que va ir.</p>
      <div class="mt-4 w-full">
        <div class="flex justify-between text-sm">
          <span>Style</span>
          <span>Narrow</span>
        </div>
        <div class="flex justify-between text-sm mt-2">
          <span>Percentage</span>
          <span>75%</span>
        </div>
        <div class="mt-4">
          <div class="bg-purple-600 h-1 rounded-full" style="width: 75%;"></div>
        </div>
      </div>
    </div>
    <div class="bg-zinc-800 p-4 rounded-lg flex flex-col items-center">
      <p class="text-center">....</p>

      <button class="mt-4 bg-purple-600 text-white py-2 px-4 rounded-lg">Button</button>
    </div>
  </div>
</div>
  </body>
</html>
</x-app-layout>
