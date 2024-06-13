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

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8">
                <!-- Primer contenedor -->
                <div class="mb-4 overflow-x-auto">
                    <h2 class="text-2xl font-bold mb-4 text-center text-white font-dmserifdisplay">Clientes Premium</h2>
                    <table class="min-w-full bg-zinc-200">
                        <thead class="bg-zinc-400">
                        <tr class="border-b">
                            <th class="py-2 px-4 font-bold text-zinc-800 font-bodoni text-center">Nombre</th>
                            <th class="py-2 px-4 font-bold text-zinc-800 font-bodoni text-center">Membresia</th>
                            <th class="py-2 px-4 font-bold text-zinc-800 font-bodoni text-center">Tipo</th>
                            <th class="py-2 px-4 font-bold text-zinc-800 font-bodoni text-center">Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data1 as $item)
                            <tr class="border-b font-bodoni">
                                <td class="border px-4 py-2 text-center">{{ $item['nombre_usuario'] }}</td>
                                <td class="border px-4 py-2 text-center">{{ $item['code'] }}</td>
                                <td class="border px-4 py-2 text-center">{{ $item['role'] }}</td>
                                <td class="border px-4 py-2 text-center"><livewire:eliminar-membresia :id="$item['id']" /></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Segundo contenedor -->
                <div class="mb-4 overflow-x-auto">
                    <h2 class="text-white text-2xl font-bold mb-4 text-center font-dmserifdisplay">Clientes</h2>
                    <div class="bg-zinc-200 rounded-md">
                        <table class="min-w-full font-bodoni">
                            <thead class="bg-zinc-400">
                            <tr>
                                <th class="py-2 text-center">Nombre</th>
                                <th class="py-2 text-center">Correo</th>
                                <th class="py-2 text-center">Tipo</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td class="border px-4 py-2 text-center">{{ $cliente->name }}</td>
                                    <td class="border px-4 py-2 text-center">{{ $cliente->email }}</td>
                                    <td class="bg-zinc-200 border px-4 py-2 text-center">{{ $cliente->role_description }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between mx-auto w-3/4 mb-6PHP">
            <div class="w-5/12">
                <div class="bg-zinc-300 text-center rounded-md">
                    <h3 class="font-bold font-bodoni bg-yellow-600 p-2 text-white">Códigos premium existentes</h3>
                    @foreach($codigosNoVinculados as $codigo)
                        <p class="font-bodoni">{{ $codigo->code }}</p>
                    @endforeach
                </div>
            </div>

            <div class="w-5/12">
                <div class="w-48 h-48 text-white text-center rounded-md font-bodoni">
                    <canvas id="clientesChart" width="100" height="100"></canvas>
                    <p>Porcentaje: {{ round($porcentajeClientesPremium) }}%</p>
                    <p>Porcentaje: {{ round($porcentajeClientesBasicos) }}%</p>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const numeroClientesPremium = {{ $numeroClientesPremium }};
        const porcentajeClientesPremium = {{ round($porcentajeClientesPremium) }};
        const numeroClienteBasicos = {{ $numeroClienteBasicos }};
        const porcentajeClientesBasicos = {{ round($porcentajeClientesBasicos) }};

        const ctx = document.getElementById('clientesChart').getContext('2d');
        const clientesChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Clientes Premium', 'Clientes Básicos'],
                datasets: [{
                    label: 'Número de Clientes',
                    data: [numeroClientesPremium, numeroClienteBasicos],
                    backgroundColor: [
                        'rgba(208, 140, 4)', // Amarillo fuerte para Clientes Premium
                        'rgba(16, 39, 156)'
                    ],
                    borderColor: [
                        'rgba(208, 140, 4)', // Borde amarillo fuerte para Clientes Premium
                        'rgba(16, 39, 156)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed !== null) {
                                    label += context.parsed + ' (' + Math.round(context.parsed / (numeroClientesPremium + numeroClienteBasicos) * 100) + '%)';
                                }
                                return label;
                            }
                        }
                    },
                    datalabels: {
                        color: '#fff',
                        anchor: 'end',
                        align: 'start',
                        offset: 10,
                        formatter: (value, ctx) => {
                            let percentage = value / ctx.chart.data.datasets[0].data.reduce((a, b) => a + b) * 100;
                            return `${value} (${percentage.toFixed(1)}%)`;
                        }
                    }
                }
            }
        });
    });
</script>
