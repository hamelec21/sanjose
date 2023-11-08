
    <div class=" flex justify-between bg-sidebar py-6 text-dev px-4">
        <div class="mt-3">Ver Web</div>
        <div class="text-center uppercase mt-4">Bienvenido: {{ auth()->user()->name }}</div>
        <div class="">
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <div class=" -mx-6 pt-0 flex justify-between items-center">
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
        </div>
    </div>




