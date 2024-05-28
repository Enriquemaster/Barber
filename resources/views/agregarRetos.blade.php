<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis retos') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-[#ffefc7]  ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Incluimos el componente Livewire "add-component" --}}
            <livewire:AddChallenge />
        </div>
    </div>

    <div class=" py-12">
        <div class="bg-[#F5ECD7]  overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex justify-center items-center text-black flex-wrap gap-4" >
                {{-- Condición para verificar si hay datos --}}
                @if($retos->isEmpty())
                    {{-- Si no hay datos, muestra un mensaje --}}
                    <p>No hay retos existentes</p>
                @else
                    {{-- Si hay datos, itera sobre ellos --}}
                    @foreach ($retos as $reto)
                        {{-- Incluye el componente "clase" con datos dinámicos --}}
                        <x-challenge id="{{$reto->challenge_id}}" titulo="{{ $reto->titulo }}" descripcion="{{ $reto->descripcion }}" recompensa="{{ $reto->recompensa }}" fecha_inicio="{{ $reto->fecha_inicio }}" fecha_final="{{ $reto->fecha_final }}" class="w-20 h-20 "></x-challenge>
                        {{--                             @dd($dato) --}}
                    @endforeach
                @endif

            </div>

        </div>

    </div>
</x-app-layout>

