@php
    use Carbon\Carbon;
@endphp
<x-app-layout>
    <div class="bg-black text-white p-8">
        <h2 class="text-center text-2xl font-bold mb-8">NUESTROS RETOS</h2>
        @if($retos->isEmpty())
            <p class="text-white">No hay retos existentes</p>
        @else
            {{-- Si hay datos, itera sobre ellos --}}
            @foreach ($retos as $reto)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-zinc-700 p-4 rounded-lg text-center">
                <h3 class="text-lg mb-4">{{ strtoupper($reto->titulo) }}</h3>
                {{$reto->descripcion}}
                <img src="{{ route('image.show', $reto->id) }}" alt="Imagen del reto" class="mx-auto mb-4">
                <button class="bg-yellow-500 text-white font-bold py-2 px-4 rounded">OBTENER</button>
                <p class="font-semibold">Válido hasta el {{ Carbon::parse($reto->fecha_final)->translatedFormat('d \d\e F \d\e\l Y') }}</p>
            </div>
        </div>
            @endforeach
        @endif
    </div>
</x-app-layout>

