
@php
    use Carbon\Carbon;
@endphp

<x-app-layout>
    <div class="bg-black text-white p-8 font-bodoni">
        <h2 class="text-center text-2xl font-bold mb-8">NUESTROS RETOS</h2>
        @if($retos->isEmpty())
            <p class="text-white text-center">No hay retos existentes</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($retos as $reto)
                    <div class="bg-zinc-700 p-4 rounded-lg text-center  transform transition duration-300 hover:scale-105">
                        <h3 class=" mb-4 text-yellow-500 text-2xl">{{ strtoupper($reto->titulo) }}</h3>
                        {{ $reto->descripcion }}

                        <img src="{{ route('image.show', $reto->id) }}" alt="Imagen del reto" class="mx-auto mb-4">
                        <h1 class="text-yellow-500 text-xl">Gana:  {{ $reto->recompensa }}</h1>
                        <p class="font-semibold">Válido hasta el {{ Carbon::parse($reto->fecha_final)->translatedFormat('d \d\e F \d\e\l Y') }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>



