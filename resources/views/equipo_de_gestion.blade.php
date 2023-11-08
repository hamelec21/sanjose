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
        <h1 class="text-3xl text-center mt-10 mb-10 font-semibold uppercase">Equipo de Gestión</h1>
    </div>


    <div class="container mx-auto">
        <p class="text-gray-700 text-justify mb-4 px-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ipsa similique, pariatur a aut, ducimus
            dolor
            deserunt et necessitatibus laborum, vel sit dignissimos aliquid quod perferendis sed. Repudiandae, culpa
            autem?
            Libero assumenda maxime cumque, officiis soluta nostrum ipsa fugit sapiente. Dicta consequatur ea
            repudiandae
            eveniet! Eum sed inventore amet similique autem doloribus repudiandae veniam obcaecati iure, praesentium,
            necessitatibus nam velit?
            Magni dolores voluptates rem, quaerat aspernatur doloribus iste quos fugiat, corrupti dolorem, ipsam
            accusantium
            assumenda inventore deleniti nemo enim quisquam qui in nesciunt aliquid perferendis delectus quas. Nemo,
            maxime
            distinctio.
            Illo minima, nihil laboriosam corporis reiciendis explicabo culpa quas ipsum nobis? Voluptas autem cum
            consequatur
            iure nostrum exercitationem doloremque hic corporis officiis, non qui temporibus quia aperiam maxime optio
            sit.
            Sunt iste, dolores impedit velit officiis totam praesentium tempore, ducimus ad necessitatibus voluptates ut
            harum! Deleniti velit et itaque vitae, dolorem maiores quod? Tempora hic dolores, commodi aspernatur quaerat
            eaque!
            Quod ea deleniti atque neque, labore ipsa illum veritatis impedit laboriosam veniam dicta fuga quam amet
            tempore
            excepturi voluptate, sit molestiae ducimus dolorum quaerat eius repellat consectetur perspiciatis animi?
            Officiis.
            Esse, quasi obcaecati perferendis unde magnam libero laborum odit est ex voluptatibus accusamus quisquam
            maxime
            neque at delectus dolor consectetur nam beatae repellat distinctio velit totam nostrum ratione deleniti.
            Vitae?
            Qui, voluptas impedit? Incidunt sit nihil magni facilis maiores. Dolore sunt corrupti maiores debitis unde
            aliquam
            atque vero quia, amet minus similique pariatur optio cupiditate iste quis cumque! Modi, illum.
            Quae iure rerum sed. Nobis esse minus temporibus aliquid fugit. Dolores, dolor vero. Reiciendis nobis id,
            fugiat
            corporis incidunt eum maiores provident ipsum, tenetur veritatis officiis rerum quasi atque perspiciatis.
            Sequi fugiat nemo dolorem facere error.
            .
        </p>
    </div>


    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 px-4 mb-10">
            <div class="flex border-red-900 border-2 ">
                <div>
                    <div>
                        <img src="{{ asset('img/EQUIPO DE GESTION/Julio Herrera Videla DIRECTOR.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">

                        <h4 class="px-4 mb-1">DIRECTOR</h4>
                        <h4 class="px-4 uppercase">Julio Herrera Videla.</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2">
                <div>
                    <div>
                        <img src="{{ asset('img/EQUIPO DE GESTION/Enrique Colarte Aguirre INSPECTOR GENERAL.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">
                        <h4 class="px-4 mb-1">INSPECTOR GENERAL</h4>
                        <h4 class="px-4 uppercase">Enrique Colarte Aguirre.</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2">
                <div>
                    <div>
                        <img
                            src="{{ asset('img/EQUIPO DE GESTION/Cristina Veliz Lopez COORDINADORA CONVIVENCIA ESCOLAR.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">
                        <h4 class="px-4 mb-1">COORDINADORA CONVIVENCIA ESCOLAR</h4>
                        <h4 class="px-4 uppercase">Cristina Andrea Veliz López.</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2 ">
                <div>
                    <div>
                        <img
                            src="{{ asset('img/EQUIPO DE GESTION/Erna Fuentes Stone COORDINADORA UTP SEGUNDO CICLO.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">

                        <h4 class="px-4 mb-1">COORDINADORA UTP SEGUNDO CICLO</h4>
                        <h4 class="px-4 uppercase">Erna Fuentes Stone.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 px-4 mb-10">
            <div class="flex-row border-red-900 border-2">
                <div>
                    <div>
                        <img src="{{ asset('img/EQUIPO DE GESTION/Maritza Sanchez Vergara COORDINADORA EQUIPO INCLUSION.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">

                        <h4 class="px-4 mb-1">COORDINADORA EQUIPO INCLUSIÓN</h4>
                        <h4 class="px-4 uppercase">Maritza Sánchez Vergara.</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2 ">
                <div>
                    <div>
                        <img src="{{ asset('img/EQUIPO DE GESTION/Patricia Lillo Villaseca Jefa UTP.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">
                        <h4 class="px-4 mb-1">JEFA DE UTP</h4>
                        <h4 class="px-4 uppercase">Patricia Lillo Villaseca.</h4>
                    </div>
                </div>
            </div>


        </div>
    </div>







    <!--fin de Contenido page-->

    @include('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>
