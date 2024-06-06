<x-app-layout>

 <div class="flex items-center justify-center text-white text-5xl h-full">
 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  <div class="bg-zinc-900 text-white xl:p-8 p-4 rounded-lg space-y-4 h-full ">
    <div class="flex flex-col md:flex-row items-center justify-between md:space-y-0 bg-zinc-900 rounded-lg  ">
  <div class="relative flex flex-col items-center justify-center md:items-start md:w-3/4 bg-zinc-900 rounded-lg mr-4 md:h-60">
    <video autoplay muted loop class="w-full h-full object-cover opacity-50">
      <source src="VIDEO/Fondo1.mp4" type="video/mp4">
      Tu navegador no soporta la reproducción de videos.
    </video>
    <h1 class="absolute inset-0 flex items-center justify-center text-white text-3xl md:text-4xl"  id="titulodashboard">Barber House</h1>
    </div>

    <div class="flex mt-4">
    <p class="text-center bg-zinc-800 rounded-l-lg " id="titulodashboard" >Obten tu membresia</p>
        <!-- Carrusel de imágenes -->
        <div class="relative w-64 h-64 overflow-hidden bg-zinc-800 rounded-r-lg">
            <img src="IMG/Producto1.png" alt="Imagen 1" class="carousel-image w-full h-full object-cover rounded-lg absolute transition-transform duration-1000 transform translate-x-0">
            <img src="IMG/Producto2.png" alt="Imagen 2" class="carousel-image w-full h-full object-cover rounded-lg absolute transition-transform duration-1000 transform translate-x-full">
            <img src="IMG/Producto3.png" alt="Imagen 3" class="carousel-image w-full h-full object-cover rounded-lg absolute transition-transform duration-1000 transform translate-x-full">
            <!-- Agrega más imágenes según sea necesario -->
        </div>
        </div>
        
    </div>

    
    
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4 pb-4">
  <a href="/servicios">
    <div class="bg-zinc-800 p-4 m-2 rounded-lg flex flex-col items-center transform transition duration-300 hover:scale-105 h-full" id="carouselContainer " >
      <p class="text-center" id="titulodashboard">Servicios</p>
      <img src="{{ asset('Icons/Product.png') }}" alt="High-quality Icons" class="w-auto h-56 mt-2 ">
      <p class="text-center text-2xl" id="contenido">Disfrute de todos nuestros servicios</p>
    </div> 
    </a>

    <a href="/productos">
    <div class="bg-zinc-800 p-4 m-2 rounded-lg flex flex-col items-center transform transition duration-300 hover:scale-105 h-full">
      <p class="text-center " id="titulodashboard" >Productos</p>
      <img src="{{ asset('Icons/Product.png') }}" alt="High-quality Icons" class="w-auto h-56 mt-2 ">
      <p class="text-center text-2xl" id="contenido">Los mejores productos a mejor precio</p>
    </div>
    </a>

    <a href="/citas">
    <div class="bg-zinc-800 p-4 m-2 rounded-lg flex flex-col items-center transform transition duration-300 hover:scale-105 h-full">
      <p class="text-center" id="titulodashboard">Agenda tu cita</p>
      <img src="{{ asset('Icons/Citas.png') }}" alt="High-quality Icons" class="w-full h-48 mt-8">
      <p class="text-center text-2xl" id="contenido">Agenda tu cita te estamos esperando</p>
    </div>
    </a>

    <a href="/retos">
    <div class="bg-zinc-800 p-4 m-2 rounded-lg flex flex-col items-center transform transition duration-300 hover:scale-105 h-full">
      <p class="text-center" id="titulodashboard">Conoce nuestros retos</p>
<img src="{{ asset('Icons/Retos.png') }}" alt="High-quality Icons" class="w-auto h-48 mt-8 p-2">
<p class="text-center text-2xl" id="contenido">Los mejores retos</p>
    </div>
  </div>
  </a>
  
  <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:h-full">
       <!-- <div class="bg-zinc-800 p-4 rounded-lg flex flex-col items-center">
      <p class="text-center text-7xl" id="titulodashboard" >Tenemos la mejor<br> valoración </p>
      <div class="mt-4 w-full">
        <div class="flex justify-between text-sm">
          <span id="contenido">Clientes <br>felices</span>
          <span id="contenido">Estan a gusto <br>con el servicio</span>
     
     
        </div>
        <div class="flex justify-between text-sm mt-2">
          <span id="contenido">Porcentaje</span>
          <span id="contenido">75%</span>
         
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
  </div>-->
</div>
 
</x-app-layout>

<script>
        document.addEventListener('DOMContentLoaded', function () {
            const images = document.querySelectorAll('.carousel-image');
            let currentIndex = 0;

            function showNextImage() {
                const totalImages = images.length;
                const currentImage = images[currentIndex];
                currentIndex = (currentIndex + 1) % totalImages;
                const nextImage = images[currentIndex];

                // Move current image out of view
                currentImage.classList.remove('translate-x-0');
                currentImage.classList.add('translate-x-full');

                // Prepare next image to slide in
                nextImage.classList.remove('hidden');
                nextImage.classList.remove('translate-x-full');
                nextImage.classList.add('translate-x-0');

                // Hide the current image after the animation
                setTimeout(() => {
                    currentImage.classList.add('hidden');
                    currentImage.classList.remove('translate-x-full');
                }, 800); // Duration of the transition
            }

            setInterval(showNextImage, 6500); // Cambia de imagen cada 2.5 segundos
        });
    </script>

