<div>

    <aside
        class="ml-[-100%] fixed z-10 top-0 pb-3 px-6 w-full flex flex-col justify-between h-screen  bg-sidebar transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%] overflow-y-auto">
        <div class="flex-row justify-center">
            <a href="https://www.juanramoncornejo.cl/" target="_blank">
            <div class="flex-row ">
                <img src="{{ asset('img/logo/jrdev.png') }}" class="w-44">
            </div>
        </a>
            <ul class="space-y-2 tracking-wide -mt-8">


                <li>
                    <a href="/dashboard" aria-label="dashboard"
                        class="relative px-4 py-1 flex items-center space-x-4 rounded-xl text-white bg-encabezado">
                        <i class="fas fa-th"></i>
                        <span class="-mr-1 font-medium">Administracion Web</span>
                    </a>
                </li>


                <li>
                    <a href="{{ route('show-comunicado') }}" class="px-4 py-1 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <i class="fas fa-chevron-circle-right text-gray-600 group-hover:text-cyan-600"></i>
                        <span class="text-gray-600 group-hover:text-cyan-600 ">Comunicados</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('show-noticia') }}"
                        class="px-4 py-1 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <i class="fas fa-chevron-circle-right text-gray-600 group-hover:text-cyan-600"></i>
                        <span class=" text-gray-600 group-hover:text-cyan-600 ">Noticias</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('show-archivo') }}"
                        class="px-4 py-1 flex items-center space-x-4 rounded-md text-gray-600 group">
                        <i class="fas fa-chevron-circle-right text-gray-600 group-hover:text-cyan-600"></i>
                        <span class=" text-gray-600 group-hover:text-cyan-600 ">Carga de Archivos</span>
                    </a>
                </li>

            </ul>




        </div>
        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <div class="px-6 -mx-6 pt-4 flex justify-between items-center border-t">
                <button class="px-4 py-3 flex items-center space-x-4 rounded-md text-red-600 group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span class="group-hover:text-red-700">Salir</span>
                </button>

                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">

                </x-dropdown-link>

            </div>
        </form>
    </aside>
</div>
