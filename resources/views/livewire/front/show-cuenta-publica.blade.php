<div>

    <!--inicio de Contenido page-->
    <div class="container mx-auto">
        <h1 class="text-3xl text-center mt-10 mb-10 font-bold uppercase text-red-900">Cuenta Publica</h1>
    </div>
    <!-- component -->
    <div class=" mx-auto lg:max-w-7xl mt-3 ">
        <div class="max-w-7xl mx-auto px-5 mb-3">

            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                @foreach ($cuentas as $cuenta)
                    <div class="max-w-xl bg-gray-400 rounded-lg border border-gray-200 shadow-md">

                        <div class="p-5">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white text-center">
                                {{ $cuenta->titulo }}</h5>
                                <div class="flex justify-center">
                                <img src="{{ asset('img/iconos/pdf-96.png') }}">
                                </div>
                                <div class="flex justify-center mt-5">
                                <a href="{{ asset('storage/' . $cuenta->archivo) }}"
                                    class="px-4 py-2 bg-red-500 rounded-xl drop-shadow-lg text-md text-white duration-300 hover:bg-red-700"
                                    download><i class="fa-solid fa-download m-2"></i>Descargar</a>
                                </div>
                            <!--df-->
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

</div>

