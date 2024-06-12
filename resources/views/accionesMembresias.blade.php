@vite(['resources/css/app.css', 'resources/js/app.js'])

@role('Administrador')
<x-app-layout>
    <div class="p-10 bg-black">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#242222] md:p-5 rounded-lg">
                <div class="flex flex-col md:flex-row md:items-start font-bodoni">
                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white md:px-5 text-center text-xl md:text-2xl">MEMBRESIAS</h1>
                        <img src="{{ asset('Icons/Retos.png') }}" alt="login" class="w-1/3 md:w-10 hidden md:block" />
                    </div>
                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white text-center text-xl md:text-2xl">ADMINISTRAR MEMBRESIAS</h1>
                    </div>
                    <div class="flex items-center justify-center w-full md:w-1/6 py-2 text-white font-bold mx-auto bg-yellow-600 rounded-lg">
                        <form id="generarMembresiaForm" action="{{ route('accionesMembresias') }}" method="POST">
                            @csrf
                            <button type="submit">Generar Membresía</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="xl:flex xl:justify-center xl:p-12">
                <div class="bg-zinc-900 p-4">
                    <div class="bg-zinc-200 rounded-lg p-4 overflow-x-auto">
                        <table class="w-full sm:w-auto text-left">
                            <thead>
                            <tr class="border-b">
                                <th class="py-2 px-4 font-bold text-zinc-800 font-bodoni">Nombre del dueño de la membresia</th>
                                <th class="py-2 px-4 font-bold text-zinc-800 font-bodoni">Caracteres de la membresia (8 caracteres)</th>
                                <th class="py-2 px-4 font-bold text-zinc-800 font-bodoni">Eliminar membresia</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data1 as $item)
                                <tr class="border-b font-bodoni">
                                    <td class="border px-4 py-2">{{ $item['nombre_usuario'] }}</td>
                                    <td class="border px-4 py-2">{{ $item['code'] }}</td>
                                    <td class="border px-4 py-2"><livewire:eliminar-membresia :id="$item['id']" /></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="bg-yellow-500 p-4 mt-4 rounded-lg">
                            <h1 class="font-bold font-bodoni">Codigos premium existentes</h1>
                            @foreach($codigosNoVinculados as $codigo)
                                <p class="font-bodoni">{{ $codigo->code }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <div class="xl:flex xl:justify-center xl:p-12">
                <div class="bg-zinc-900 p-4">
                    <div class="bg-zinc-200 rounded-lg p-4 overflow-x-auto">
                        <table>
                            <thead>
                            <tr>
                                <th>Nombre del Cliente</th>
                                <th>Email del Cliente</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->name }}</td>
                                    <td>{{ $cliente->email }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endrole

@role('Cliente|Cliente-premium')
<div class="bg-black h-screen flex items-center justify-center">
    <img src="{{ asset('IMG/robot-403.png') }}" alt="No estas autorizado para ver esto" class="h-1/2">
</div>
@endrole
