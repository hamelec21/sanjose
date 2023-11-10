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

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <!--menu principal-->

    @include('menu_principal')










    <!--contenido web-->
    <footer class="bg-footer  shadow  w-full   relative bottom-0">
        <div class="w-full  mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-around">

                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-white sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="nosotros.html" class="mr-4 hover:underline md:mr-6 ">Nosotros</a>
                    </li>
                    <li>
                        <a href="secretaria.html" class="mr-4 hover:underline md:mr-6">Secretaria</a>
                    </li>

                    <li>
                        <a href="contacto.html" class="hover:underline">Contacto</a>
                    </li>
                </ul>
            </div>

            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-white sm:text-center dark:text-gray-400">© 2023 <a href="#"
                    class="hover:underline">Esc.Particular N° 17 San Jose</a>. All Rights Reserved.</span>
        </div>

    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    @livewireScripts
</body>

</html>
