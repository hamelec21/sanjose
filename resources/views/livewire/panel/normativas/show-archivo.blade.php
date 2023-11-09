<div>
    @livewire('panel.menu.sidebar')


    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80] 2xl:w-[85%] ">

        {{-- tabla --}}
        <div class="overflow-x-auto">
            <div class="mt-10 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    {{-- seccion de busqueda --}}

                    <div class="container mx-auto">
                        <div class="text-gray-100 text-center mt-10 text-lg font-bold uppercase bg-encabezado py-1">
                            Centro de Carga de Archivos</div>
                    </div>
                    <div class="flex justify-around bg-gray-200">

                        <div class=" text-left text-gray-900 font-bold py-1 text-sm mt-2">

                            <input wire:model.live="search" type="text" name="titulo" id=""
                                placeholder="Busqueda"
                                class=" rounded-lg border-transparent flex-1 appearance-none border border-blue-600 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            @error('titulo')
                                <span class="error text-red-600 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <a href="{{ route('crear-archivo') }}">
                            <button class="btn-agregar mb-5 mt-3">Crear Nueva Archivo</button>
                        </a>
                    </div>

                    <div class="bg-white shadow-md rounded my-6">

                        <table class="min-w-max w-full table-auto">

                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">Descarga</th>
                                    <th class="py-3 px-6 text-left">Tipo Documento</th>
                                    <th class="py-3 px-6 text-left">Titulo del Documento</th>
                                    <th class="py-3 px-6 text-left">Fecha</th>
                                    <th class="py-3 px-6 text-center">Acciones</th>
                                </tr>
                            </thead>
                            @if ($normas->count())
                                <tbody class="text-gray-600 text-sm font-light">
                                    @foreach ($normas as $norma)
                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                            <td class="py-3 px-6 text-center">
                                                <a href="{{ asset('storage/' . $norma->archivo) }}"
                                                    class="btn btn-primary" download>Descargar PDF</a>
                                            </td>

                                            <td class="py-3 px-6 text-center">
                                                <div class="flex items-center font-bold">
                                                    <span> {{ $norma->titulo }}</span>
                                                </div>
                                            </td>

                                            <td class="py-3 px-6 text-center">
                                                <div class="flex items-center font-bold">
                                                    <span> {{ $norma->tipo_documento }}</span>
                                                </div>
                                            </td>

                                            <td class="py-3 px-6 text-left">
                                                <div class="flex items-center">
                                                    <span> {{ date('d-m-Y', strtotime($norma->created_at)) }}</span>
                                                </div>
                                            </td>

                                            <td class="py-3 px-6 text-center">
                                                <div class="flex item-center justify-center">

                                                    <div class="flex items-center justify-around py-2 ">
                                                        {{-- boton para llamar el formulario editar <a href="{{route('crear-noticia')}}">sd</a> --}}

                                                        <a href="{{ route('editar-noticia', [$norma->id]) }}">
                                                            <button class="btn-editar mb-5">Editar</button>
                                                        </a>

                                                    </div>


                                                    <div class="mt-2 px-3">
                                                        <a onclick="confirm('Estas Seguro de Eliminar El Archivo!')||event.stopImmediatePropagation()"
                                                            wire:click="destroy({{ $norma->id }})"><button
                                                                class="btn btn-eliminar ">Eliminar</button> </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                        </table>
                    @else
                        @include('components.alerta-busqueda')
                        @endif
                        <div class="bg-gray-200">
                            @if ($normas->hasPages())
                                <div class="px-6 py-3 ">
                                    {{ $normas->links() }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
