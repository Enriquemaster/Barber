<x-app-layout>
    @role('Administrador')
    <div class="flex items-center justify-center ">
        <div class="container mx-auto py-10 max-w-6xl">
            <div class="flex justify-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 p-5 md:grid-cols-3 lg:grid-cols-3 gap-6 w-11/12">
                    <a href="/agendar" class="bg-[#302c2c] rounded-lg shadow-md p-4 md:p-6 text-center transform transition duration-300 hover:scale-105">
                        <h2 class="text-lg md:text-xl font-semibold mb-4 text-white">MIS CITAS</h2>
                        <img src="{{ asset('Icons/Citas.png') }}"  alt="login" class="w-1/2 mx-auto  md:w-1/3 py-10" />
                    </a>

                    <a href="/agregarPromociones" class="bg-[#302c2c] rounded-lg shadow-md p-4 md:p-6 text-center transform transition duration-300 hover:scale-105">
                        <h2 class="text-lg md:text-xl font-semibold mb-4 text-white">ADMINISTRAR PROMOCIONES</h2>
                        <img src="{{ asset('Icons/Estadis.png') }}" alt="login" class="w-1/2 mx-auto md:w-1/3  py-10" />
                    </a>

                    <a href="/agregarRetos" class="bg-[#302c2c] rounded-lg shadow-md p-4 md:p-6 text-center transform transition duration-300 hover:scale-105">
                        <h2 class="text-lg md:text-xl font-semibold mb-4 text-white">ADMINISTRAR RETOS</h2>
                        <img src="{{ asset('Icons/Retos.png') }}" alt="login" class="w-1/2 mx-auto md:w-1/3 py-10" />
                    </a>

                    <a href="/accionesProductos" class="bg-[#302c2c] rounded-lg shadow-md p-4 md:p-6 text-center transform transition duration-300 hover:scale-105">
                        <h2 class="text-lg md:text-xl font-semibold mb-4 text-white">ADMINISTRAR PRODUCTOS</h2>
                        <img src="{{ asset('Icons/Product.png') }}" alt="login" class="w-1/2 mx-auto md:w-1/3 py-10" />
                    </a>

                    <a href="/accionesServicios" class="bg-[#302c2c] rounded-lg shadow-md p-4 md:p-6 text-center transform transition duration-300 hover:scale-105">
                        <h2 class="text-lg md:text-xl font-semibold mb-4 text-white">ADMINISTRAR SERVICIOS</h2>
                        <img src="{{ asset('Icons/workshop.png') }}" alt="login" class="w-1/2 mx-auto md:w-1/3 py-10" />
                    </a>


                    <a href="/accionesMembresias" class="bg-[#302c2c] rounded-lg shadow-md p-4 md:p-6 text-center transform transition duration-300 hover:scale-105">
                        <h2 class="text-lg md:text-xl font-semibold mb-4 text-white">ADMINISTRAR MEMBRESIAS</h2>
                        <img src="{{ asset('Icons/credit2.svg') }}" alt="login" class="w-1/2 mx-auto md:w-1/3 py-10" />
                    </a>



                </div>
            </div>
        </div>
    </div>
    @endrole

    @role('Cliente|Cliente-premium')
    <div class="flex items-center justify-center bg-zinc-950 bg-cover bg-center bg-no-repeat bg-opacity-50 w-full relative ">
        <img src="{{ asset('IMG/dash-Cliente.png') }}" alt="login" class="object-cover w-full h-full" />
    </div>
    <div>
        <livewire:add-cita/>
    </div>
    <div class="container mx-auto px-4 py-8 ">
        <h2 class="text-center text-3xl font-bold mb-8 text-white">¡Bienvenido a The Barber's House!</h2>
        <h1 class="text-white p-5">
            Nos alegra tenerte de vuelta, {{ Auth::user()->name }}. Estamos aquí para asegurarnos de que siempre luzcas tu mejor versión. Aquí tienes todo lo que necesitas para tu cuidado personal:
        </h1>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <div class="text-center transform transition duration-300 hover:scale-105 h-ful">
                <p class="text-white text-xl font-semibold p-5">SERVICIOS</p>

                <a href="{{ url('servicios') }}">
                    <img src="{{ asset('Servis/Servicios1.jpeg') }}" alt="Arreglo de Barba" class="w-full h-auto mb-4">
                </a>
            </div>
            <div class="text-center transform transition duration-300 hover:scale-105 h-ful">
                <p class="text-white text-xl font-semibold p-5">PROMOCIONES Y DESCUENTOS</p>
                <a href="{{ url('promocionesClientes') }}">
                    <img src="{{ asset('Servis/Promo4.jpeg') }}" alt="Arreglo de Barba" class="w-full h-auto mb-4">
                </a>
            </div>
            <div class="text-center transform transition duration-300 hover:scale-105 h-ful">
                <p class="text-white text-xl font-semibold p-5">NUESTROS DESAFÍOS</p>
                <a href="{{ url('retosClientes') }}">
                    <img src="{{ asset('Servis/Desafio.jpeg') }}" alt="Servicio de Limpieza Facial" class="w-full h-auto mb-4">
                </a>
            </div>
        </div>
        <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h2 class="text-3xl font-extrabold text-center text-white mb-8">NUESTROS PRODUCTOS</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-white ">
                <div class="text-center  transform transition duration-300 hover:scale-105 h-ful">
                    <img src="{{ asset('Products/Pomada-red.png') }}" alt="Pomada Clásica, Capital Grooming, 3.4 oz" class="mx-auto mb-4">
                    <h3 class="text-lg font-medium">POMADA CLÁSICA, CAPITAL GROOMING, 3.4 OZ</h3>
                    <p class="text-zinc-500">$ 320.00</p>
                </div>
                <div class="text-center  transform transition duration-300 hover:scale-105 h-ful">
                    <img src="{{ asset('Products/Pomada-blue.png') }}" alt="Pomada Mate, Capital Grooming, 3.4 oz" class="mx-auto mb-4">
                    <h3 class="text-lg font-medium">POMADA MATE, CAPITAL GROOMING, 3.4 OZ</h3>
                    <p class="text-zinc-500">$ 320.00</p>
                </div>
                <div class="text-center  transform transition duration-300 hover:scale-105 h-ful">
                    <img src="{{ asset('Products/Pomada-green.png') }}"alt="Bálsamo para Barba Aroma Lavanda, Don Porfirio, 80 g" class="mx-auto mb-4">
                    <h3 class="text-lg font-medium">BÁLSAMO PARA BARBA AROMA LAVANDA, DON PORFIRIO, 80 G</h3>
                    <p class="text-zinc-500">$ 398.00</p>
                </div>
                <div class="text-center  transform transition duration-300 hover:scale-105 h-ful">
                    <img src="{{ asset('Products/Pomada-yellow.png') }}" alt="Bálsamo para Barba, Man's Face Stuff, 3.6oz" class="mx-auto mb-4">
                    <h3 class="text-lg font-medium">BÁLSAMO PARA BARBA, MAN'S FACE STUFF, 3.6OZ</h3>
                    <p class="text-zinc-500">$ 320.00</p>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="/productos" class="bg-[#fff4e4] hover:bg-[#aba090] font-bold px-6 py-2 rounded">VER TODOS</a>
            </div>
        </div>
    </div>
    @endrole

</x-app-layout>
