<div>

    @livewire('panel.menu.sidebar')
    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80] 2xl:w-[85%] ">
        <div class="container mx-auto">
            <div class="bg-amber-500 text-white shadow-lg text-center font-bold pt-4 pb-4 w-full rounded-lg mb-10 mt-10">
                Editar Comunicado
            </div>

            <form class="px-4 border border-gray-300" wire:submit.prevent="save">
                <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4 mt-5 ">
                    <label class="px-2">Titulo</label>

                    <input type="text" name="titulo" id="titulo" wire:model="comunico.titulo"
                        class="rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                    @error('titulo')
                        <span class="error text-red-600 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                {{-- $contenido --}}
                <div class="text-left text-gray-900 font-bold py-1 text-sm px-4 mb-4 " wire:ignore>
                    <label class="px-2">Contenido</label>
                    <textarea type="text" name="contenido" id="editor" wire:model="comunico.contenido"  value="{!!$comunico->contenido!!}"
                        class="rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                                    {!! $comunico->contenido !!}
                                 </textarea>

                    @error('contenido')
                        <span class="error text-red-600 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class=" flex justify-center">
                    <button  type="submit" class="btn-editar mb-5">Guardar</button>


                </div>

            </form>
        </div>
    </div>
</div>

</div>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then(function(editor){
            editor.model.document.on('change:data',()=>{
                @this.set('comunico.contenido',editor.getData());
            })
        })
        .catch( error => {
            console.error( error );
        } );
</script>

