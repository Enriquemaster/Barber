@php
    use Carbon\Carbon;
@endphp
<div class=" py-12">
    <div class="bg-black  overflow-hidden shadow-xl sm:rounded-lg">
        <div class="flex justify-center items-center text-black flex-wrap gap-4" >
            {{-- Condición para verificar si hay datos --}}
            @if($retos->isEmpty())
                {{-- Si no hay datos, muestra un mensaje --}}
                <p class="text-white">No hay retos existentes</p>
            @else
                {{-- Si hay datos, itera sobre ellos --}}
                @foreach ($retos as $reto)

                    <div class="bg-gray-100 p-8 rounded-lg shadow-md w-full max-w-4xl font-dmserifdisplay ">
                        <h1 class="text-center text-2xl font-bold mb-4">"{{ strtoupper($reto->titulo) }}"</h1>
                        <hr class="border-t-2 border-black mb-4">
                        <div  class="flex flex-col md:flex-row md:items-start py-2">
                            <div class="md:w-3/4 border-2 border-black p-4-2 mb-4 md:mb-0 md:mr-4">

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
                            <div class="md:w-1/4 md:h-auto ">
                                <div class="max-w-full max-h-full ">
                                    <img src="{{ route('image.show', $reto->id) }}" alt="Imagen del reto" class="object-cover w-full h-full">
                                </div>
                            </div>

                            <div class="flex flex-col md:w-1/4 p-2 items-center justify-center ">
                                <div class="py-2">
                                    <livewire:DeleteChallenge :id="$reto->id" />
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
