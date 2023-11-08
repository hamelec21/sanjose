<x-app-layout>

    @livewire('panel.menu.sidebar')
    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80] 2xl:w-[85%]">

        <!--Header-->

        @include('header-dashboard')
        <div class="w-full pt-6 text-xl text-center">DASHBOARD</div>
        <!-- section card one -->
        <br>
        <div class="container py-10 mx-auto ">
            <div class="grid grid-cols-1 gap-4 mx-4 my-2  lg:grid-cols-6">
                <div class="h-40 p-6 text-center text-gray-300 bg-sidebar rounded-lg shadow-xl hover:bg-gray-800">
                    <i class="text-jr fas fa-bullhorn fa-2x"></i>
                    <div class="pt-8  text-dev">
                        <a href="{{ route('show-comunicado') }}">Crear Comunicado</a>
                    </div>
                </div>

                <div class="h-40 p-6 text-center text-gray-300 bg-sidebar rounded-lg shadow-xl hover:bg-gray-800">
                    <i class="text-jr fas fa-newspaper fa-2x"></i>
                    <div class="pt-8  text-dev">
                        <a href="{{ route('show-noticia') }}">Crear Noticia</a>
                    </div>
                </div>
            </div>
        </div>


    </div>


    </div>


</x-app-layout>
