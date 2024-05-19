@extends('layouts.base')

@section('content')

<div class="flex flex-col items-center justify-center h-screen">

    <h1 class="flex justify-center text-4xl mb-24 text-white">Confirma tu cita</h1>
            
    <div class="bg-gray-200 w-full md:w-[800px] h-[600px] rounded-lg shadow-md relative p-4 md:p-0 mb-24">
        <h1 class="flex items-center text-2xl mt-6 py-2 px-20">
            Su información....
        </h1>
    
        <div class="bg-white p-6 rounded-md mb-4 mx-4 mt-14">
            <p>Información 1:</p>
        </div>

        <div class="bg-white p-6 rounded-md mb-4 mx-4">
            <p>Información 2:</p>
        </div>

        <div class="flex items-center mb-4 mx-4 mt-12">
            <input type="checkbox" id="checklist1" name="checklist1" class="h-6 w-6 rounded-full border-gray-300 focus:ring focus:border-blue-300">
            <label for="checklist1" class="ml-2">Estoy de acuerdo con la política de cancelación</label>
        </div>

        <div class="flex items-center mb-4 mx-4">
            <input type="checkbox" id="checklist2" name="checklist2" class="h-6 w-6 rounded-full border-gray-300 focus:ring focus:border-blue-300">
            <label for="checklist2" class="ml-2">Enviar recordatorio por correo electrónico</label>
        </div>

        <div class="absolute bottom-0 text-center w-full mb-4 md:mb-8">
            <button id="reservarBtn" class="ml-2 bg-[#FFA300] text-white text-xl md:text-xl px-10 md:px-80 py-3 md:py-4 rounded-md focus:outline-none focus:ring focus:border-blue-100">Reservar</button> 
        </div>
    </div>

    
    <div id="ventanaEmergente" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-8 rounded-md shadow-md hidden w-[500px]">
    <div class="flex flex-col items-center justify-center">
        <h2 class="text-2xl font-bold mb-4">Política de cancelación</h2>
        <p class="text-center mb-4">Por favor, tenga en cuenta que dispone de una hora antes de su cita para realizar la solicitud de cambio. En caso de no presentarla, deberá realizar una nueva solicitud a través de nuestros formularios en línea.</p>
        <button id="cerrarVentana" class="bg-[#1C6FEB] text-white px-20 py-2 rounded-md hover:bg-yellow-800 focus:outline-none focus:ring focus:border-blue-100">De acuerdo</button>
    </div>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var checklist1 = document.getElementById('checklist1');
            var reservarBtn = document.getElementById('reservarBtn');
            var ventanaEmergente = document.getElementById('ventanaEmergente');
            var cerrarVentana = document.getElementById('cerrarVentana');

            checklist1.addEventListener('click', function () {
                if (checklist1.checked) {
                    
                    ventanaEmergente.style.display = 'block';
                }
            });

            cerrarVentana.addEventListener('click', function () {
               
                ventanaEmergente.style.display = 'none';
            });

            reservarBtn.addEventListener('click', function () {
             
            });
        });
    </script>

</div>

@endsection
