<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reservas') }}
        </h2>
    </x-slot>

    <div>
    <div class="mx-auto w-11/12 h-full ">
<div class="row ">
    <div class="col-12">
        <div>
            <h2 class="text-center text-2xl font-bold text-white Bodoni mt-10">Lista de reservas</h2>
        </div>
        </div>
    </div>
    
    <div class="container mx-auto mt-8">
     <table class="min-w-full bg-zinc-700 border border-gray-300 text-white Bodoni">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Nombre</th>
                        <th class="py-2 px-4 border-b">Correo</th>
                        <th class="py-2 px-4 border-b">Servicio</th>
                        <th class="py-2 px-4 border-b">Barbero</th>
                        <th class="py-2 px-4 border-b">Fecha</th>
                        <th class="py-2 px-4 border-b">Opciones</th>
                   
                    </tr>
                </thead>

                <tbody class="bg-zinc-500">
                @foreach ($Cita as $cita)
                        <tr>
                        <td class="py-2 px-4 border text-center items-center">{{$cita->id}}</td>
                        <td class="py-2 px-4 border text-center items-center">{{$cita->nombre}}</td>
                        <td class="py-2 px-4 border text-center items-center">{{$cita->correo}}</td>
                        <td class="py-2 px-4 border text-center items-center">{{$cita->servicio}}</td>
                        <td class="py-2 px-4 border text-center items-center">{{$cita->barbero}}</td>
                        <td class="py-2 px-4 border text-center items-center">{{$cita->fecha}}</td>
                        <td class="py-2 px-4 border text-center items-center">
                        <div class="flex flex-row gap-5 items-center justify-center">
                        <a href="{{ url('/editar_reserva/'.$cita->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300"> Editar</a>
                        <form action="{{route('citas.destroy', $cita)}}" method="POST">
                        @csrf
                        @method('DELETE')
                       <button class="bg-[#C01C1C] text-white px-4 py-2 rounded hover:bg-red-700 mr-2">Cancelar</button>
                       </form>
                       </div>
                        </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            <div class="mx-auto max-w-md mt-5 mb-5">
    @if(Session::get('success'))
        <div class="text-white text-center ">
            <p class="font-semibold text-lg">{{ Session::get('success') }}</p>
        </div>
    @endif
</div>

</div>
</div>
    </div>
</x-app-layout>
