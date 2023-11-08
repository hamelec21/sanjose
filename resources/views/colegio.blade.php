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
        <h1 class="text-3xl text-center mt-10 mb-10 font-bold uppercase text-red-900"> Reseña Fundador Congregación Hermanas
            Hospitalarias de “San José”</h1>
    </div>

    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="flex justify-center">
                <img src="{{ asset('img/padre fundador.jpg') }}">
            </div>
            <div class="container mx-auto">
                <p class="text-gray-700 text-justify mb-4 px-4">
                    <b>José Agustín Gómez Díaz </b>(Santiago, 28 de agosto de 1830 - Gorbea, 15 de enero de 1908) fue un
                    sacerdote chileno. Sus padres fueron Cruz Gómez Escudero y Encarnación Díaz Arancibia.
                </p>
                <p class="text-gray-700 text-justify mb-4 px-4">
                    Realizó sus estudios en el Colegio de los Padres Mercenarios, donde también estudia música y canto.
                    En 1844
                    se hace cargo de la Orden Mercedaria a los 14 años de edad. El 5 de octubre de 1850, recibe el
                    Título de
                    Bachiller en Teología. El 24 de septiembre de 1853, recibe el grado de subdiácono y diácono. El 10
                    de junio
                    de 1854 en el Templo Metropolitano, se recibe de sacerdote diocesano, consagrándolo el arzobispo
                    Monseñor
                    Rafael Valentín Valdivieso.
                </p>
                <p class="text-gray-700 text-justify mb-4 px-4">
                    Monumento conmemorativo al Cura Gómez frente al colegio que lleva su nombre
                </p>
                <p class="text-gray-700 text-justify mb-4 px-4">
                    Recién ordenado sacerdote es destinado como capellán del monasterio de Nuestra Señora del Buen
                    Pastor,
                    quienes recién llegaban a Chile.
                </p>
                <p class="text-gray-700 text-justify mb-4 px-4">
                    En la Guerra del Pacífico fue el preparador espiritual del batallón Aconcagua y del contingente del
                    Regimiento Esmeralda, llegando a ser nombrado su capellán.
                </p>
                <p class="text-gray-700 text-justify mb-4 px-4">
                    Fundó dos congregaciones religiosas: <b>Las Hermanas Hospitalarias de San José</b>, en San Felipe,
                    en 1866. <b>Las
                        Hermanas Hospitalarias del Sacratísimo Corazón de Jesús</b> en San Carlos, en 1903, obra que fue
                    ratificada por
                    el presidente José Manuel Balmaceda Fernández quien era su amigo y partidario, pero tras la Guerra
                    Civil de
                    1891 con la derrota del bando Balmacedista le afectó su imagen pública por el resto de su vida
                    llevándolo al
                    destierro al Sur. Pasó sus últimos años en Gorbea. Falleció el 15 de enero de 1908, sus restos están
                    en la
                    Capilla de la Congregación y del Colegio Sagrado Corazón de Jesús de San Carlos en San Carlos
                    (Chile). En
                    recuerdo y reconocimiento de su labor se levantaron dos monumentos. Uno en San Felipe y otro en
                    Gorbea.
                </p>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <h1 class="text-3xl text-center mt-10 mb-10 font-bold uppercase text-red-900"> Reseña Historica Escuela</h1>
    </div>


    <div class="container mx-auto">
        <p class="text-gray-700 text-justify mb-4 px-4">
            La Escuela Particular N° 17 “San José” es Particular Subvencionada, perteneciente a la Congregación
            “Hermanas Hospitalarias de San José”, fundada en 1866 por el Padre José Agustín Gómez Díaz.
            El año 1894 se funda el “Hogar San José” con la finalidad de acoger a niñas huérfanas y desprotegidas. Esta
            tutela permanente dio pie a la enseñanza y la formación, la que años más tarde daría inicio a lo que
            posteriormente sería la escuela “San José”.

        </p>

        <p class="text-gray-700 text-justify mb-4 px-4">
            En el año 1953 el Ministerio de Educación otorga al colegio el reconocimiento oficial, mediante el decreto
            <b>3651 del 01 de septiembre de 1953.</b>
        </p>
        <p class="text-gray-700 text-justify mb-4 px-4">
            Actualmente el Establecimiento cuenta con Excelencia Académica y posee una matrícula de 777 estudiantes de
            Pre- Kínder a Octavo Básico. Destaca en su enseñanza la entrega de <b>valores cristianos</b> y buen nivel de
            aprendizaje. La escuela tiene desde el año 2008 firmado el Convenio de Subvención Escolar Preferencial
            (SEP), el cual le permite desarrollar talleres como: Teatro, Folclore, Música, Periodismo, Danza Rítmica y
            Talleres de Deportes como: Futbolito, Basquetbol, Atletismo, voleibol y hándbol.
        </p>

        <p class="text-gray-700 text-justify mb-4 px-4">
            <b>Misión:</b>Nuestra Misión es potenciar el aprendizaje reflexivo, crítico e
            inclusivo de los estudiantes, en un ambiente cristiano de convivencia,
            sustentado en valores como la justicia social, la solidaridad y el respeto, la
            valoración de la diversidad y el desarrollo de talentos en beneficio propio y
            de la comunidad, incorporando a la familia como primer agente formador.
        </p>

        <p class="text-gray-700 text-justify mb-4 px-4">
            <b>Visión:</b> Queremos ser reconocidos como una institución educativa que aporte
            en la formación de ciudadanos con valores como la justicia, la solidaridad y
            el respeto, en un marco de educación cristiana, que permita el desarrollo
            integral desde la riqueza de la diversidad.
        </p>

    </div>

    <div class="container mx-auto">
        <h1 class="text-3xl text-center mt-10 mb-10 font-bold uppercase text-red-900">Nuestra Escuela</h1>
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
