@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>
<body class="bg-black flex justify-center items-center p-10">
{{--<div class="flex flex-col md:flex-row">--}}
{{--    <div class="w-full md:w-3/5 bg-gray-200 ">--}}
{{--        <img src="{{ asset('IMG/log.jpg') }}" alt="login" class="w-full mx-auto md:w-auto" />--}}
{{--    </div>--}}

{{--    <div class="w-full md:w-2/5 bg-gray-300 ">--}}
        {{ $slot }}
{{--    </div>--}}
{{--    </div>--}}
</body>
</html>

<script>
   // Función para manejar el cambio en el input de la imagen
   function mostrarImagenPreview() {
            const input = document.getElementById('imagenInput');
            const preview = document.getElementById('imagenPreview');

            // Verifica si se seleccionó una imagen
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    // Asigna la imagen al fondo del contenedor
                    preview.style.backgroundImage = `url('${e.target.result}')`;
                };

                // Lee el contenido de la imagen seleccionada
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Asigna el evento de cambio al input de la imagen
        document.getElementById('imagenInput').addEventListener('change', mostrarImagenPreview);
    </script>
