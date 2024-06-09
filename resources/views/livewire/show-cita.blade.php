<div class="w-full">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
        @foreach($citas as $cita)

            <div class="border rounded-lg overflow-hidden shadow-lg">
                <div class="bg-gray-200 px-4 py-2">
                    <span class="font-semibold">{{ $cita->servicio }}</span>
                </div>
                <div class="px-4 py-4 space-y-5">
                    <p> {{ $cita->barbero }}</p>
                </div>

                <p>Fecha: {{ $cita->fecha }}</p>

            </div>
        @endforeach
    </div>
</div>
