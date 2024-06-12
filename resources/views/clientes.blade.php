<!-- resources/views/clientes.blade.php -->

@vite(['resources/css/app.css', 'resources/js/app.js'])
@role('Administrador')
<x-app-layout>
    <div class="p-10 bg-black">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#242222] md:p-5 rounded-lg">
                <div class="flex flex-col md:flex-row md:items-start font-bodoni">
                    <div class="flex items-center justify-center w-full md:w-1/3 py-2 md:py-5">
                        <h1 class="text-white md:px-5 text-center text-xl md:text-2xl">CLIENTES</h1>
                        <img src="{{ asset('Icons/Retos.png') }}" alt="clientes" class="w-1/3 md:w-10 hidden md:block" />
                    </div>
                </div>
            </div>

            <div class="xl:flex xl:justify-center xl:p-12">
                <div class="bg-zinc-900 p-4">
                    <div class="bg-zinc-200 rounded-lg p-4 overflow-x-auto">
                        <table class="w-full sm:w-auto text-left">
                            <thead>
                            <tr class="border-b">
                                <th class="py-2 px-4 font-bold text-zinc-800 font-bodoni">Nombre del Cliente</th>
                                <th class="py-2 px-4 font-bold text-zinc-800 font-bodoni">Email del Cliente</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clientes as $cliente)
                                <tr class="border-b font-bodoni">
                                    <td class="border px-4 py-2">{{ $cliente->name }}</td>
                                    <td class="border px-4 py-2">{{ $cliente->email }}</td>
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
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="bg-black h-screen flex items-center justify-center">
    <img src="{{ asset('IMG/robot-403.png') }}" alt="No estas autorizado para ver esto" class="h-1/2">
</div>
@endrole
