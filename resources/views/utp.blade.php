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
    <h1 class="text-3xl text-center mt-10 mb-10 font-bold uppercase text-red-900">UNIDAD TÉCNICA PEDAÓGICA</h1>
  </div>


  <!--contenido articulo o noticia-->

  <div class="container mx-auto mt-10 mb-10">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 ">

      <div>
        <img src="img/convivencia-escolar.png" class=" mb-0 px-0 mt-0">
      </div>



        <div>
            <p class="text-gray-700 text-justify mb-4 px-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ipsa similique, pariatur a aut, ducimus dolor
                deserunt et necessitatibus laborum, vel sit dignissimos aliquid quod perferendis sed. Repudiandae, culpa autem?
                Libero assumenda maxime cumque, officiis soluta nostrum ipsa fugit sapiente. Dicta consequatur ea repudiandae
                eveniet! Eum sed inventore amet similique autem doloribus repudiandae veniam obcaecati iure, praesentium,
                necessitatibus nam velit?
                Magni dolores voluptates rem, quaerat aspernatur doloribus iste quos fugiat, corrupti dolorem, ipsam accusantium
                assumenda inventore deleniti nemo enim quisquam qui in nesciunt aliquid perferendis delectus quas. Nemo, maxime
                distinctio.</p>
                <p class="text-gray-700 text-justify mb-4 px-4">Illo minima, nihil laboriosam corporis reiciendis explicabo culpa quas ipsum nobis? Voluptas autem cum consequatur
                iure nostrum exercitationem doloremque hic corporis officiis, non qui temporibus quia aperiam maxime optio sit.
                Sunt iste, dolores impedit velit officiis totam praesentium tempore, ducimus ad necessitatibus voluptates ut
                harum! Deleniti velit et itaque vitae, dolorem maiores quod? Tempora hic dolores, commodi aspernatur quaerat
                eaque!
                Quod ea deleniti atque neque, labore ipsa illum veritatis impedit laboriosam veniam dicta fuga quam amet tempore
                excepturi voluptate, sit molestiae ducimus dolorum quaerat eius repellat consectetur perspiciatis animi? Officiis.
                Esse, quasi obcaecati perferendis unde magnam libero laborum odit est ex voluptatibus accusamus quisquam maxime
                neque at delectus dolor consectetur nam beatae repellat distinctio velit totam nostrum ratione deleniti. Vitae?
                Qui, voluptas impedit? Incidunt sit nihil magni facilis maiores. Dolore sunt corrupti maiores debitis unde aliquam
                atque vero quia, amet minus similique pariatur optio cupiditate iste quis cumque! Modi, illum.
                Quae iure rerum sed. Nobis esse minus temporibus aliquid fugit.

            </p>
        </div>
    </div>
  </div>

<!--fin de Contenido page-->

    @include('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    </body>
</html>
