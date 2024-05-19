
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Actualización') }}
        </h2>
    </x-slot>
    <div class="flex items-center justify-center mt-10">
            <!-- Formulario con los campos -->
         
            <form action="{{route('citas.update', $cita->id)}}" method="POST">
                        @csrf
                        @method("PUT")
                        <h1 class="text-white text-center text-xl mb-5 ">Actualiza la información</h1>
                <div class="mb-4 mx-auto w-3/4"> 
                    
                    <label for="username" class="text-justify block text-sm font-medium text-white">Nombres (Opcional):</label>
                    <input type="text" id="nombre" name="nombre" class="bg-zinc-600 text-white border-gray-600 w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" value="{{$cita->nombre}}" >                    <p id="nombreError" class="text-red-500 hidden">Solo se permiten letras</p>
                </div>
                            
                <div class="mb-4 mx-auto w-3/4"> 
                    <label for="correo" class="text-justify block text-sm font-medium text-white">Correo:</label>
                    <input type="text" id="correo" name="correo" class="bg-zinc-600 text-white border-gray-600 w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" value="{{$cita->correo}}">
                </div>
<div class="flex flex-row gap-5">
                <div class="w-full md:w-1/2">
                    <label for="servicio" class="block text-sm font-medium text-white text-justify pb-2">Servicios:</label>
                    <select id="servicio" name="servicio" class="bg-zinc-600 text-white border-gray-600 w-full px-1 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" >
                    <option value="">Seleccione un servicio</option>
                    <option value="Corte de cabello normal" value="Corte de cabello normal" @if($cita->servicio == "Corte de cabello normal") selected @endif>Corte de cabello normal</option>
                    <option value="Corte de cabello desvanecido" @if($cita->servicio == "Corte de cabello desvanecido" ) selected @endif>Corte de cabello desvanecido</option>
                    <option value="Corte de cabello desvanecido con grecas" @if($cita->servicio == "Corte de cabello desvanecido con grecas" )selected @endif>Corte de cabello desvanecido con grecas</option>
                    <option value="Alineación de barba y bigote" @if($cita->servicio == "Alineación de barba y bigote")selected @endif>Alineación de barba y bigote</option>
                    <option value="Trenzados de cabello" @if($cita->servicio == "Trenzados de cabello" ) selected @endif>Trenzados de cabello</option>
                    <option value="Decoloraciones" @if($cita->servicio == "Decoloraciones" ) selected @endif>Decoloraciones</option>
                    </select>
                </div>

                <div class="w-full md:w-1/2">
                    <label for="barbero" class="block text-sm font-medium text-white text-justify pb-2">Barberos:</label>
                    <select id="barbero" name="barbero" class="bg-zinc-600 text-white border-gray-600 w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" >
                    <option value="">Seleccione un barbero</option>
                    <option value="David Alberto Tec Chi" @if($cita->barbero == "David Alberto Tec Chi")selected @endif >David Alberto Tec Chi</option>
                    <option value="Christian de Jesus Chan" @if($cita->barbero == "Christian de Jesus Chan")selected @endif>Christian de Jesus Chan</option>
                    </select>
                </div>
</div>
                <div class="text-center p-4">
                    <label class=" text-white text-lg" for="start" >Selecciona una fecha:</label><br>
                    <input class="bg-zinc-600 text-white" type="datetime-local" id="fecha" name="fecha" value="{{ \Carbon\Carbon::parse($cita->fecha)->format('Y-m-d\TH:i') }}">
                </div>

                <div class="flex flex-row justify-center items-center mb-4 ">
                <div>
                <a href="{{url('reservas')}}" class="mr-2 bg-sky-900 text-white text-xl px-20 py-2 rounded-md hover:bg-sky-950 focus:outline-none focus:ring focus:border-blue-100 md:px-10 md:py-2">Regresar</a>
                </div>
                <div>
                <button type="submit" class="ml-2 bg-yellow-600 text-white text-xl px-20 py-2 rounded-md hover:bg-yellow-800 focus:outline-none focus:ring focus:border-blue-100 md:px-10 md:py-2">Actualizar</button>
                </div>    
                </div>
    </div>
</x-app-layout>

