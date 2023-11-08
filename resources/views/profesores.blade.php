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
        <h1 class="text-3xl text-center mt-10 mb-10 font-semibold uppercase">profesores</h1>
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
            <div class="flex border-red-900 border-2">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Ana Gladys Salgado de la Paz.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">
                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Ana Gladys Salgado de la Paz.</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Ana Karen Munoz.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">
                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Ana Karen Muñoz.</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2 ">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Carolina Droguett Pizarro.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">

                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Carolina Droguett Pizarro</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2 ">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Cecilia Tejada Bugueno.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">

                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Cecilia Tejada Bugueño</h4>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 px-4 mb-10">
            <div class="flex border-red-900 border-2">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Constanza Uribe Ortega.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">
                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Constanza Uribe Ortega.</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Daniela Herrera Gallardo.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">
                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Daniela Herrera Gallardo.</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2 ">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Erna Fuentes Stone.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">

                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Erna Fuentes Stone</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2 ">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Heidy Baeza Tapia.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">

                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Heidy Baeza Tapia</h4>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 px-4 mb-10">
            <div class="flex border-red-900 border-2">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Ingrid Carvajal Flores.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">
                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Ingrid Carvajal Flores.</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Luis Para Espinoza.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">
                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Luis Para Espinoza.</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2 ">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Moises Perez Fernandez.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">

                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Moisés Pérez Fernández</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2 ">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Pablo Taucan Quiroga.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">

                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Pablo Taucán Quiroga</h4>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 px-4 mb-10">
            <div class="flex border-red-900 border-2">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Pamela Berrios Marin.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">
                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Pamela Berríos Marín.</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Paulina Zelaya Martinez.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">
                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Paulina Zelaya Martínez.</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2 ">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Ronald Rojas Aguilera.jpg') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">

                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Ronald Rojas Aguilera</h4>
                    </div>
                </div>
            </div>

            <div class="flex border-red-900 border-2 ">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Soledad Gana Venegas.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">

                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Soledad Gana Venegas</h4>
                    </div>
                </div>
            </div>

        </div>


    </div>


    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 px-4 mb-10">
            <div class="flex border-red-900 border-2">
                <div>
                    <div>
                        <img src="{{ asset('img/DOCENTES/Zalia Devia Paez.JPG') }}">
                    </div>
                    <div class="bg-footer  text-center text-white">
                        <h4 class="px-4 mb-1">Docente</h4>
                        <h4 class="px-4 uppercase">Zalia Devia Paez.</h4>
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
