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
    <h1 class="text-3xl text-center mt-10 mb-10 font-bold uppercase text-red-900">Academia de Teatro</h1>
</div>


  <div class="container mx-auto">
    <p class="text-gray-700 text-justify mb-4 px-4">

      El teatro en la infancia es una de las mejores formas de expresión, diversión y desarrollo.
      A los niños/as les gusta y lo pasan bien y además favorece a la evolución de cada
      parte de su cuerpo y mente.
      El teatro ayuda a los niño/as en la mejora del lenguaje, de la compresión y
      especialmente de la expresión. Amplían su vocabulario; mejora la pronunciación,
      entonación y vocalización.
      La dramatización influye positivamente en la expresión corporal y gestual; en la
      comprensión de su cuerpo (de cada una de sus partes: los brazos, las piernas, la
      cabeza, sus ojos), de sus posibilidades de acción y sus limitaciones. Y en la
      creatividad y originalidad de actuación, de expresión plástica y musical.
      Potencia el desarrollo psicomotor y el movimiento espacial, es decir, la lateralidad y el
      desenvolvimiento con confianza y seguridad en el medio.
    </p>
  </div>

  <div class="container mx-auto mt-10 mb-10">

    <div class=" grid grid-cols-1 lg:grid-cols-4 gap-4">

      <div>
        <img src="{{ asset('img/academias/teatro/teatro_1.jpg') }}" class=" object-contain">
      </div>

      <div>
        <img src="{{ asset('img/academias/teatro/teatro_2.jpg') }}" class=" object-contain">
      </div>

      <div>
        <img src="{{ asset('img/academias/teatro/teatro_3.jpg') }}" class=" object-contain">
      </div>

      <div>
        <img src="{{ asset('img/academias/teatro/teatro_4.jpg') }}" class=" object-contain">
      </div>
    </div>
  </div>








<!--fin de Contenido page-->

    @include('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    </body>
</html>
