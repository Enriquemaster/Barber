<x-app-layout>
    <div class="p-10 bg-black">
        <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">
            {{-- Incluimos el componente Livewire "add-component" --}}
            <div class="bg-[#242222] md:p-5 rounded-lg ">
                <div class="flex flex-col md:flex-row md:items-start">
                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white md:px-5 text-center text-xl md:text-2xl">MIS RETOS</h1>
                        <img src="{{ asset('Icons/Retos.png') }}" alt="login" class="w-1/3 md:w-10 hidden md:block" />
                    </div>

                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white text-center text-xl md:text-2xl">ADMINISTRAR RETOS</h1>
                    </div>

                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <livewire:AddChallenge/>
                    </div>
                 
                </div>
            </div>
            <div class="">
                <livewire:show-challenge />
            </div>

        </div>
    </div>
</x-app-layout>


