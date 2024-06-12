@php
    use Carbon\Carbon;
@endphp
<x-app-layout>
    <div class="bg-black text-white p-8">
        <h2 class="text-center text-2xl font-bold mb-8 font-dmserifdisplay">NUESTRAS PROMOCIONES Y DESCUENTOS</h2>
        @if($promotions->isEmpty())
            <p class="text-white text-center">No hay retos existentes</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 font-bodoni">
                @foreach ($promotions as $promotion)
                    <div class="bg-zinc-800 p-4 rounded-lg text-center  transform transition duration-300 hover:scale-105">
                        <h3 class="text-yellow-500 mb-4 text-2xl">{{ strtoupper($promotion->titulo) }}</h3>
                        {{ $promotion->descripcion }}
                        <img src="{{ route('promotion.image.show', $promotion->id) }}" alt="Imagen de la promoción" class="mx-auto mb-4">
                        <p class="font-semibold">Válido hasta el {{ Carbon::parse($promotion->fecha_final)->translatedFormat('d \d\e F \d\e\l Y') }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>
