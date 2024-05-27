{{-- Define las propiedades que pueden ser pasadas al componente --}}
@props(['id','asignatura','descripcion','carrera'])
<div class="flex-wrap max-w-sm p-6 border border-gray-200 rounded-lg shadow bg-[#395f61]">
    <a href="">
        {{-- Mostramos el nombre de la asignatura como título --}}
        <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">  {{$asignatura}}</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
        {{-- Mostramos la descripción de la asignatura --}}
        Descripción: {{$descripcion}} <br>
        {{-- Mostramos la carrera de la asignatura --}}
        Carrera: {{$carrera}}
    </p>
    {{-- Incluimos el componente Livewire para eliminar la asignatura --}}
    <livewire:Deletecomponet :id="$id" />
</div>
