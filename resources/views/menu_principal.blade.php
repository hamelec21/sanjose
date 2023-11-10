<nav class="bg-header border-gray-300  z-30">
    <div class="w-full flex flex-wrap items-center justify-around mx-auto p-4">
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-900 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-red-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>

      <a href="/" class="flex items-center">
          <img src="{{ asset('/img/logo/logo.png') }}" class="h-24 mr-3" alt="Flowbite Logo" />

      </a>

      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-5 md:flex-row md:space-x-4 md:mt-0 md:border-0 ">


          <a href="/">
            <button id="dropdownDefaultButton" data-dropdown-toggle="index" class="w-full mb-1 text-white bg-red-800 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md px-4 py-2 text-center inline-flex items-center" type="button">Home<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          </a>


          <a href="/noticias">
            <button id="dropdownDefaultButton" data-dropdown-toggle="noticias" class= "w-full mb-1 text-white bg-red-800 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md px-4 py-2 text-center inline-flex items-center" type="button">Noticias<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          </a>

          <a href="/colegio">
            <button id="dropdownDefaultButton" data-dropdown-toggle="noticias" class= "w-full mb-1 text-white bg-red-800 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md px-4 py-2 text-center inline-flex items-center" type="button">Colegio<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          </a>

         <!--Academias-->

          <button id="dropdownDefaultButton" data-dropdown-toggle="academias" class="z-10 text-white bg-red-800 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md px-4 py-2 mb-1 text-center inline-flex items-center" type="button">Academias<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          <!-- Dropdown menu -->
          <div id="academias" class="z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="/teatro" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Teatro</a>
                </li>
                <li>
                  <a href="/musica" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Música</a>
                </li>
                <li>
                  <a href="/folclore" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Folclore</a>
                </li>
                <li>
                  <a href="/danza" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Danza</a>
                </li>
                <li>
                  <a href="/gimnasia_ritmica" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Gimnasia Rítmica</a>
                </li>
                <li>
                  <a href="/futsal" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Futsal</a>
                </li>
                <li>
                  <a href="/futbol" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Futbol</a>
                </li>
                <li>
                  <a href="/volleybol" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Volleybol</a>
                </li>
              </ul>
          </div>


          <!--departamentos-->
          <button id="dropdownDefaultButton1" data-dropdown-toggle="departamentos" class=" mb-1 text-white bg-red-800 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md px-4 py-2 text-center inline-flex items-center" type="button">Comunidad<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
          <!-- Dropdown menu -->
          <div id="departamentos" class="z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton1">
                <li>
                  <a href="/utp" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Unidad Técnica Pedagógica</a>
                </li>
                <li>
                  <a href="/convivencia_escolar" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Convivencia Escolar</a>
                </li>
                <li>
                  <a href="/inspectoria" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Inspectoría</a>
                </li>
                <li>
                  <a href="/inclusion" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Inclusión</a>
                </li>
                <li>
                  <a href="/pastoral" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Pastoral</a>
                </li>
              </ul>
          </div>

           <!--Departamentos de Asignaturas-->
           <button id="dropdownDefaultButton" data-dropdown-toggle="asignaturas" class="mb-1 text-white bg-red-800 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md px-4 py-2 text-center inline-flex items-center" type="button">Departamentos<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
           <!-- Dropdown menu -->
           <div id="asignaturas" class="z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
               <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                 <li>
                   <a href="/lenguaje" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Lenguaje</a>
                 </li>
                 <li>
                   <a href="/matematicas" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Matemática</a>
                 </li>
                 <li>
                   <a href="/ciencia_naturales" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Ciencias Naturales</a>
                 </li>
                 <li>
                   <a href="/historia_y_geografia" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Historia y Geografía</a>
                 </li>
                 <li>
                   <a href="/artes_y_tecnologia" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Artes y Tecnología</a>
                 </li>
                 <li>
                   <a href="/educacion_fisica" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Educación Física</a>
                 </li>
               </ul>
           </div>


            <!--Talleres-->
            <button id="dropdownDefaultButton" data-dropdown-toggle="talleres" class=" mb-1 text-white bg-red-800 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md px-4 py-2 text-center inline-flex items-center" type="button">Talleres<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="talleres" class="z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                  <li>
                    <a href="/taller_matematicas" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Matemáticas</a>
                  </li>
                  <li>
                    <a href="/taller_deportes" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Deportes</a>
                  </li>
                  <li>
                    <a href="/taller_ingles" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Inglés </a>
                  </li>

                </ul>
            </div>

              <!--Talleres-->
              <button id="dropdownDefaultButton" data-dropdown-toggle="centro_alumnos" class="mb-1 text-white bg-red-800 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md px-4 py-2 text-center inline-flex items-center" type="button">Directivas<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
              <!-- Dropdown menu -->
              <div id="centro_alumnos" class="z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                      <a href="/centro_de_alumnos" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Centro de Alumnos</a>
                    </li>
                    <li>
                        <a href="/centro_de_padres" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Centro de Padres y Apoderados</a>
                      </li>
                    {{--
                    <li>
                      <a href="/actividades" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Actividades extraprogramáticas y celebracioness</a>
                    </li>
                    --}}
                  </ul>
              </div>


                <!--Personal establecimiento-->
            <button id="dropdownDefaultButton" data-dropdown-toggle="personal" class="mb-1 text-white bg-red-800 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md px-4 py-2 text-center inline-flex items-center" type="button">Personal Establecimiento<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="personal" class="z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="/equipo_de_gestion" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Equipo de Gestión</a>
                </li>
                <li>
                  <a href="/profesores" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Profesores</a>
                </li>
                {{--
                <li>
                  <a href="/asistentes_profesionales" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Asistentes profesionales</a>
                </li>
                 --}}
                <li>
                  <a href="/asistentes_de_aulas" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Asistentes de aula</a>
                </li>
                <li>
                    <a href="/educadora_de_parvulo" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Educadora de Parvulo</a>
                  </li>
                <li>
                  <a href="/inspectores" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Inspectores</a>
                </li>
                {{--
                <li>
                  <a href="/personal_administrativo" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Personal administrativo</a>
                </li>
                --}}
                <li>
                  <a href="/personal_de_servicio" class="block px-4 py-2 hover:bg-red-800 text-gray-800 hover:text-white">Personal de Servicio</a>
                </li>
              </ul>
            </div>
        </ul>
      </div>
    </div>
</nav>
