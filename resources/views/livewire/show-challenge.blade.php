<x-slot name="header">
    <h2 class="font-semibold text-xl text-white leading-tight">
        {{ __('Mis retos') }}
    </h2>
</x-slot>
<div class=" py-12">
    <div class="bg-black  overflow-hidden shadow-xl sm:rounded-lg">
        <div class="flex justify-center items-center text-black flex-wrap gap-4" >
            {{-- Condición para verificar si hay datos --}}
            @if($retos->isEmpty())
                {{-- Si no hay datos, muestra un mensaje --}}
                <p>No hay retos existentes</p>
            @else
                {{-- Si hay datos, itera sobre ellos --}}
                @foreach ($retos as $reto)

                    <div class="flex-wrap max-w-sm p-6 border border-gray-200 rounded-lg shadow bg-[#395f61]">
                        <a href="">
                            {{-- Mostramos el titulo del reto --}}
                            <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">  {{$reto->titulo}}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{-- Mostramos la descripción del reto --}}
                            Descripción: {{$reto->descripcion}} <br>
                            {{-- Mostramos la recompensa --}}
                            Recompensa: {{$reto->recompensa}}<br>
                            {{-- Mostramos la fecha de inicio--}}
                            Inicia: {{$reto->fecha_inicio}}<br>
                            {{-- Mostramos la fecha final--}}
                            Finaliza: {{$reto->fecha_final}}
                        </p>
                        {{-- Incluimos el componente Livewire para eliminar el reto --}}
                        <livewire:DeleteChallenge :id="$reto->id" />
                    </div>
                @endforeach
            @endif

        </div>

    </div>

</div>
