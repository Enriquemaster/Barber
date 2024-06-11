@role('Administrador')
<x-app-layout>
    <div class="p-10 bg-black">
        <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">
            {{-- Incluimos el componente Livewire "add-component" --}}
            <div class="bg-[#242222] md:p-5 rounded-lg font-dmserifdisplay">
                <div class="flex flex-col md:flex-row md:items-start">
                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white md:px-5 text-center text-xl md:text-2xl">MIS PROMOCIONES</h1>
                        <img src="{{ asset('Icons/Retos.png') }}" alt="login" class="w-1/3 md:w-10 hidden md:block" />
                    </div>

                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white text-center text-xl md:text-2xl">ADMINISTRAR PROMOCIONES</h1>
                    </div>

                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <livewire:AddPromotions/>
                    </div>
                </div>
            </div>
            <div class="">
                <livewire:show-promotions />
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

