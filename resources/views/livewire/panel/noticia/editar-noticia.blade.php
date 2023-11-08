<div>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    @livewire('panel.menu.sidebar')
    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80] 2xl:w-[85%] ">
        <div class="container mx-auto">
            <div class="bg-amber-500 text-white shadow-lg text-center font-bold pt-4 pb-4 w-full rounded-lg mb-10 mt-10">
                Editar Noticia
            </div>

            <form class="px-4 border border-gray-300" wire:submit.prevent="save">
                <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4 mt-5 ">
                    <label class="px-2">Titulo</label>

                    <input type="text" name="titulo" id="titulo" wire:model="new.titulo"
                        class="rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                    @error('titulo')
                        <span class="error text-red-600 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- $contenido --}}
                <div class="text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4 " wire:ignore>
                    <label class="px-2">Contenido</label>
                    <textarea type="text" name="contenido" id="editor" wire:model="new.contenido"
                        class="rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                                    {!! $new->contenido !!}
                                 </textarea>

                    @error('contenido')
                        <span class="error text-red-600 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                {{-- foto articulo --}}
                <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4">
                    <label class="px-2">Fotografía Noticia</label>
                </div>
                <div class="container mx-auto w-1/2 mb-10">
                    <span class="font-medium uppercase"><img src="{{ Storage::url($new->imagen) }}"
                            class="w-1/2 " alt="{{$new->imagen}}">
                    </span>
                </div>


                <div class="grid grid-cols-2 gap-4 px-4 mb-10">
                    <!-- component -->
                    <div>
                        <label for="dropzone-file"
                            class="mx-auto cursor-pointer flex w-full max-w-lg flex-col items-center rounded-xl border-2 border-dashed border-blue-400 bg-white p-6 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <h2 class="mt-4 text-xl font-medium text-gray-700 tracking-wide">Subir Imagen</h2>
                            <p class="mt-2 text-gray-500 tracking-wide"> Extenciones PNG y JPG <br>
                            Tamaño imagen 600x900px</p>
                            <input id="dropzone-file" type="file" class="hidden" wire:model="imagen" />
                    </div>

                    <div class="justify-center border-2 border-dashed border-blue-400 rounded-lg h-full">
                        @if ($imagen)
                            <img src="{{ $imagen->temporaryUrl() }}">
                        @endif
                    </div>
                </div>

                <div class=" flex justify-center">
                    <button class="btn-editar mb-5">Guardar</button>
                </div>

            </form>
        </div>
    </div>
</div>

</div>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(function(editor) {
            editor.model.document.on('change:data', () => {
                @this.set('new.contenido',editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
