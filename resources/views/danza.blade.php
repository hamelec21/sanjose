<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Escuela San jose</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <!--menu principal-->

    @include('menu_principal')

    <!--inicio de Contenido page-->

    <div class="container mx-auto">
        <h1 class="text-3xl text-center mt-10 mb-10 font-bold uppercase text-red-900">Academia de Danza</h1>
    </div>


    <div class="container mx-auto">
        <p class="text-gray-700 text-justify mb-4 px-4">

            La Danza es la expresión física a través del movimiento y el ritmo de las relaciones, los sentimientos y las
            ideas, abarcando múltiples géneros, estilos y tradiciones. Sus funciones van desde lo recreativo a lo
            sagrado y cubren todas las formas de propósito social. La danza es una parte esencial de la vida y de la
            educación integral de niños y niñas.
        </p>
    </div>

    <div class="container mx-auto mt-10 mb-10">

        <div class=" grid grid-cols-1 lg:grid-cols-4 gap-4">

            <div>
                <img src="{{ asset('img/danza/danza_1.jpg') }}" class=" object-contain">
            </div>

            <div>
                <img src="{{ asset('img/danza/danza_2.jpg') }}" class=" object-contain">
            </div>

            <div>
                <img src="{{ asset('img/danza/danza_3.jpg') }}" class=" object-contain">
            </div>

            <div>
                <img src="{{ asset('img/danza/danza_4.jpg')  }}" class=" object-contain">
            </div>
        </div>
    </div>








    <!--fin de Contenido page-->
    <!--fin de Contenido page-->

    @include('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>
