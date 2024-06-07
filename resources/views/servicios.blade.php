<x-app-layout>

<!--<div class="xl:py-44 sm:py-8 ">
        <div class="mx-auto sm:px-6 lg:px-8 xl:px-56">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg ">


<script src="https://cdn.tailwindcss.com"></script>
<div class="bg-zinc-800 text-white p-6 h-5/6 font-serif">
    
    <h1 class="text-3xl font-bold mb-6 mx-8">Servicios</h1>
    <div class="flex flex-col md:flex-row">
        <div class="md:w-1/2">
            <h2 class="text-2xl mb-4 mx-8">Cortes</h2>
            @foreach($servicios as $servicio)
            <ul>
                <li class="mb-2 mx-8">{{ $servicio->corte }}<span class="float-right">${{ $servicio->precio }}</span></li>
    
            </ul>
            @endforeach

            <div class="flex justify-center items-center mt-4">
                {{ $servicios->links() }} 
            </div>
            
        </div>
        <div class="md:w-1/2 flex flex-wrap justify-end p-4">
            <img src="https://placehold.co/150x150" alt="Haircut" class="m-2 rounded-lg shadow-lg h-32 w-32 object-cover">
            <img src="https://placehold.co/150x150" alt="Beard Trim" class="m-2 rounded-lg shadow-lg h-32 w-32 object-cover">
            <img src="https://placehold.co/150x150" alt="Beard Trim" class="m-2 rounded-lg shadow-lg h-32 w-32 object-cover">
            <img src="https://placehold.co/150x150" alt="Beard Trim" class="m-2 rounded-lg shadow-lg h-32 w-32 object-cover">  
            <img src="https://placehold.co/150x150" alt="Beard Trim" class="m-2 rounded-lg shadow-lg h-32 w-32 object-cover">  
            <img src="https://placehold.co/150x150" alt="Beard Trim" class="m-2 rounded-lg shadow-lg h-32 w-32 object-cover">  
            <img src="https://placehold.co/150x150" alt="Beard Trim" class="m-2 rounded-lg shadow-lg h-32 w-32 object-cover">  
            <img src="https://placehold.co/150x150" alt="Beard Trim" class="m-2 rounded-lg shadow-lg h-32 w-32 object-cover">  

        </div>
    </div>
</div>

</div>
 </div>
</div>-->

    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="bg-zinc-800 min-h-screen flex items-center justify-center ">
  <div class="relative">
    <img src="https://placehold.co/600x800" alt="Menu Board" class="w-full h-auto sm:p-4">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white p-4">
            @foreach($servicios as $servicio)
            <ul>
                <li class="mb-2 mx-8">{{ $servicio->corte }}<span class="float-right">${{ $servicio->precio }}</span></li>
            </ul>
            @endforeach
    </div>
  </div>
</div>
  </body>
</html>


</x-app-layout>
