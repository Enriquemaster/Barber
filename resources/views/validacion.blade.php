@extends('layouts.base')

@section('content')

<div class="flex flex-col items-center justify-center h-screen">
    <div class="bg-gray-200 w-full md:w-[800px] h-[600px] rounded-lg shadow-md relative p-4 md:p-0">
        <h1 class="flex items-center justify-center text-4xl mt-6">
            Conoce nuestra política de Reserva
        </h1>
   
        <div class="flex-1 justify-center text-center Bodoni md:text-2xl max-w-[650px] word-wrap break-word mt-24 md:mt-24 mx-auto overflow-y-auto">
            ¡Buen día, tenemos el placer de servirte en tu proceso de reservación de servicio! Para llevarlo a cabo, es necesario llegar puntual a la fecha y hora programada ya que solo contamos con 10 minutos de tolerancia, los pagos son únicamente en EFECTIVO o TRANSFERENCIA dentro del establecimiento. 
            En caso de no llegar a tiempo para tu cita podrás cancelar o reprogramar hasta 1 hora antes sin cargos extra.   
        </div>

        <div class="absolute bottom-0 text-center w-full mb-4 md:mb-8">
        <a href="{{url('Confirmacion')}}" class="bg-[#FFA300] text-white text-xl md:text-xl px-10 md:px-80 py-3 md:py-4 rounded-md focus:outline-none focus:ring focus:border-blue-100">Agendar</a>
        </div>
    </div>
</div>


@endsections