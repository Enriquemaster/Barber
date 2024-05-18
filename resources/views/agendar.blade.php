@extends('layouts.base')

@section('content')
<div class="bg-black md:container md:mx-auto  p-5 md:p-10 py-10 md:py-10">
                <div class="flex flex-col md:flex-row items-center w-full h-full md:px-10">
                    <div class="w-full items-center justify-center p-5">
                        <img src="{{ asset('IMG/Barber.png') }}" alt="Fondo-Barber" class=" md:w-11/12 ">
                    </div>
                    <div class="bg-black rounded-lg p-5 w-3/4 text-white montserrat">
                    
                        <h2 class="text-center text-3xl font-bold text-yellow-600">Agenda una cita</h2><br>

                        <form action="{{route('citas.store')}}" method="POST">
                        @csrf

                            <h1 class="text-center text-lg">Elige entre todos nuestros servicios y barberos disponibles</h1>
                            <div class="text-center p-4">
                                <label class=" text-lg" for="start" >Selecciona una fecha:</label>
                                <input class="bg-zinc-600 text-white" type="datetime-local" id="fecha" name="fecha">
                            </div>

                            <div class="flex flex-col md:flex-row gap-5 mb-5 p-5">
                            <div class="w-full md:w-1/2">
                                <label for="servicio" class="block text-sm font-medium text-white text-justify pb-2">Servicios:</label>
                              <select id="servicio" name="servicio" class="bg-zinc-600 text-white border-gray-600 w-full px-1 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" >
                              <option value="">Seleccione un servicio</option>
                                <option value="Corte de cabello normal">Corte de cabello normal</option>
                                <option value="Corte de cabello desvanecido">Corte de cabello desvanecido</option>
                                <option value="Corte de cabello desvanecido con grecas">Corte de cabello desvanecido con grecas</option>
                                <option value="Alineación de barba y bigote">Alineación de barba y bigote</option>
                                <option value="Trenzados de cabello">Trenzados de cabello</option>
                                <option value="Decoloraciones">Decoloraciones</option>
                              </select>
                              <p id="ServicioError" class="text-red-500 hidden">Por favor selecciona un servicio</p>
                            </div>
                            <div class="w-full md:w-1/2">
                                <label for="barbero" class="block text-sm font-medium text-white text-justify pb-2">Barberos:</label>
                                <select id="barbero" name="barbero" class="bg-zinc-600 text-white border-gray-600 w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" >
                                    <option value="">Seleccione un barbero</option>
                                    <option value="David Alberto Tec Chi">David Alberto Tec Chi</option>
                                  <option value="Christian de Jesus Chan">Christian de Jesus Chan</option>
                                </select>
                                <p id="BarberoError" class="text-red-500 hidden">Por favor selecciona un barbero</p>
                              </div>
                            </div>

                            <div class="flex flex-col md:flex-row gap-5 mb-5 md:p-5 ">
                            <div class="mb-4 mx-auto w-3/4"> 
                                <label for="username" class="text-justify block text-sm font-medium text-white">Nombres (Opcional):</label>
                                <input type="text" id="nombre" name="nombre" class="bg-zinc-600 text-white border-gray-600 w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" >
                                <p id="nombreError" class="text-red-500 hidden">Solo se permiten letras</p>
                            </div>
                            <div class="mb-4 mx-auto w-3/4"> 
                                    <label for="correo" class="text-justify block text-sm font-medium text-white">Correo:</label>
                                    <input type="text" id="correo" name="correo" class="bg-zinc-600 text-white border-gray-600 w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" >
                                    <p id="correoError" class="text-red-500 hidden">Solo se permiten correos con la terminación @gmail.com, @hotmail.com, @yahoo.com, @outlook.com</p>
                                </div>
                            </div>
                        <div class="flex justify-center items-center mb-4">
                          <a href="{{url('')}}" class="mr-2 bg-[#00066a] text-white text-xl px-20 py-2 rounded-md hover:bg-sky-950 focus:outline-none focus:ring focus:border-blue-100 md:px-10 md:py-2">Regresar</a>
                          <button type="submit" href="{{url('validacion')}}" class="mr-2 bg-[#862323] text-white text-xl px-20 py-2 rounded-md hover:bg-sky-950 focus:outline-none focus:ring focus:border-blue-100 md:px-10 md:py-2">Agendar</button>
                        </div>
                        @if ($errors->any())                
                        <div class="bg-red-500 text-white font-bold p-4 rounded-md shadow-md">
                        <strong>Error...</strong> Faltaron campos por escribir!<br><br>
                        <ul class="list-disc pl-6">
                        @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                        </div>
                         @endif
                        </form>
                    </div>
                </div>
            </div>
        @endsection