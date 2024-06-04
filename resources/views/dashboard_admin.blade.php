<x-app-layout>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="flex items-center justify-center md:h-80vh">
        <div class="container mx-auto py-10 max-w-6xl">
            <div class="flex justify-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 px-10 md:grid-cols-3 lg:grid-cols-4 gap-6 w-full">
                    <a href="/agregarCitas" class="bg-[#302c2c] rounded-lg shadow-md p-4 md:p-6 text-center transform transition duration-300 hover:scale-105">
                        <h2 class="text-lg md:text-xl font-semibold mb-4 text-white">MIS CITAS</h2>
                        <img src="{{ asset('Icons/Citas.png') }}"  alt="login" class="w-full mx-auto md:w-auto py-10" />
                    </a>

                    <a href="/agregarEstadisticas" class="bg-[#302c2c] rounded-lg shadow-md p-4 md:p-6 text-center transform transition duration-300 hover:scale-105">
                        <h2 class="text-lg md:text-xl font-semibold mb-4 text-white">MIS ESTADÍSTICAS</h2>
                        <img src="{{ asset('Icons/Estadis.png') }}" alt="login" class="w-full mx-auto md:w-1/2 py-10" />
                    </a>

                    <a href="/agregarRetos" class="bg-[#302c2c] rounded-lg shadow-md p-4 md:p-6 text-center transform transition duration-300 hover:scale-105">
                        <h2 class="text-lg md:text-xl font-semibold mb-4 text-white">ADMINISTRAR RETOS</h2>
                        <img src="{{ asset('Icons/Retos.png') }}" alt="login" class="w-full mx-auto md:w-1/2 py-10" />
                    </a>

                    <a href="/accionesProductos" class="bg-[#302c2c] rounded-lg shadow-md p-4 md:p-6 text-center transform transition duration-300 hover:scale-105">
                        <h2 class="text-lg md:text-xl font-semibold mb-4 text-white">ADMINISTRAR PRODUCTOS</h2>
                        <img src="{{ asset('Icons/Product.png') }}" alt="login" class="w-full mx-auto md:w-3/5 py-2" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
