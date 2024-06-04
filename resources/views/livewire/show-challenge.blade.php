@php
    use Carbon\Carbon;
@endphp
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

                    <div class="bg-gray-100 p-8 rounded-lg shadow-md w-full max-w-4xl ">
                        <h1 class="text-center text-2xl font-bold mb-4">"{{ strtoupper($reto->titulo) }}"</h1>
                        <hr class="border-t-2 border-black mb-4">
                        <div  class="flex flex-col md:flex-row md:items-start">
                            <div class="md:w-3/4 border-2 border-black p-4 mb-4 md:mb-0 md:mr-4">
                                <p class="text-center mb-6">
                                    {{$reto->descripcion}}
                                </p>
                                <p class="text-center mb-6">
                                    Recompensa:  {{$reto->recompensa}}
                                </p>

                                <div class="text-center mb-4">
                                    <p class="font-semibold">Válido hasta el {{ Carbon::parse($reto->fecha_final)->translatedFormat('d \d\e F \d\e\l Y') }}</p>
                                </div>
                            </div>

                            <div class="flex flex-col md:w-1/4 p-2 items-center justify-center ">
                                <div class="py-2">
                                    <livewire:DeleteChallenge :id="$reto->id" />

                                </div>

                                <div>
                                    <livewire:DeleteChallenge :id="$reto->id" />

                                </div>
                            </div>
                        </div>
                        </div>








{{--                    <div class="flex-wrap max-w-sm p-6 border border-gray-200 rounded-lg shadow bg-[#395f61]">--}}
{{--                        <a href="">--}}
{{--                            --}}{{-- Mostramos el titulo del reto --}}
{{--                            <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">  {{$reto->titulo}}</h5>--}}
{{--                        </a>--}}
{{--                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">--}}
{{--                            --}}{{-- Mostramos la descripción del reto --}}
{{--                            Descripción: {{$reto->descripcion}} <br>--}}
{{--                            --}}{{-- Mostramos la recompensa --}}
{{--                            Recompensa: {{$reto->recompensa}}<br>--}}
{{--                            --}}{{-- Mostramos la fecha de inicio--}}
{{--                            Inicia: {{$reto->fecha_inicio}}<br>--}}
{{--                            --}}{{-- Mostramos la fecha final--}}
{{--                            Finaliza: {{$reto->fecha_final}}--}}
{{--                        </p>--}}
{{--                        --}}{{-- Incluimos el componente Livewire para eliminar el reto --}}
{{--                        <livewire:DeleteChallenge :id="$reto->id" />--}}
{{--                    </div>--}}
                @endforeach
            @endif

        </div>

    </div>

</div>
