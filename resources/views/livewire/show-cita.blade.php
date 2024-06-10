@php
    use Carbon\Carbon;
@endphp
<div class="xl:flex xl:justify-center xl:p-12">
    <div class="bg-black p-4">
        <div class=" rounded-lg p-4 overflow-x-auto">
            <table class="w-full sm:w-auto text-center ">
                <thead>
                <tr class="border-b bg-zinc-400">
                    <th class="py-4 px-4 font-bold text-zinc-800 font-bodoni text-xl">NOMBRE</th>
                    <th class="py-4 px-4 font-bold text-zinc-800 font-bodoni text-xl">SERVICIO</th>
                    <th class="py-4 px-4 font-bold text-zinc-800 font-bodoni text-xl">BARBERO</th>
                    <th class="py-4 px-4 font-bold text-zinc-800 font-bodoni text-xl">FECHA</th>
                    <th class="py-2 px-1 font-bold text-zinc-800 font-bodoni text-xl">ACCIONES</th>

                </tr>
                </thead>
                <tbody>
                @foreach($citas as $cita)
                    <tr class="border-b bg-zinc-200">
                        <td class="border px-4 py-2 font-bodoni text-xl">{{$cita->Cliente}}</td>
                        <td class="border px-4 py-2 font-bodoni text-xl">{{ $cita->servicio}}</td>
                        <td class="border px-4 py-2 font-bodoni text-xl">{{ $cita->barbero}}</td>
                        <td class="border px-4 py-2 font-bodoni text-xl">{{ Carbon::parse($cita->Fecha)->translatedFormat('d \d\e F \d\e\l Y') }}</td>
                        <td class="border  py-2">
                             <livewire:delete-cita :id="$cita->id" />

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
