<div>
    @livewire('panel.menu.sidebar')
    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80] 2xl:w-[85%] ">
        <div class="px-8">
            <div class="bg-cyan-600 text-white shadow-lg text-center font-bold pt-4 pb-4 w-full rounded-lg mb-10 mt-10">
                Crear Nuevo Archivo
            </div>
            <form class="px-4 border border-gray-300" wire:submit.prevent="save">
                <div class="container ">
                    <div class="grid grid-cols-1  gap-2">
                        <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4">
                            <label class="px-4">Titulo Archivo</label>
                            <input wire:model="titulo" type="text" name="titulo" id="" placeholder="Titulo"
                                min="30" maxlength="140"
                                class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            @error('titulo')
                                <span class="error text-red-600 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4">
                            <label class="px-4">Titulo Archivo</label>
                            <select wire:model="tipo_documento" class="rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                                <option value="">Seleccione</option>
                                <option value="normativa o reglamento">Normativa o Reglamento</option>
                                <option value="utiles">Útiles Escolares</option>
                            </select>
                            @error('tipo_documento')
                                <span class="error text-red-600 text-xs">{{ $message }}</span>
                            @enderror
                        </div>



                        <div class=" text-left text-gray-900 font-bold py-1  text-sm mb-10 px-4">
                            <label class="px-2 ">Subir archivo</label>
                            <input wire:model="archivo" type="file" name="archivo" id=""
                                placeholder="https://juanramoncornejo.cl/"
                                class=" rounded-lg  flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                            @error('archivo')
                                <span class="error text-red-600 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class=" flex justify-center">
                    <button class="btn-agregar mb-5">Guardar</button>
                </div>

            </form>
        </div>
    </div>


</div>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(function(editor) {
            editor.model.document.on('change:data', () => {
                @this.set('contenido', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>


<script>
    ClassicEditor
        .create(document.querySelector('#editor1'))
        .then(function(editor1) {
            editor1.model.document.on('change:data', () => {
                @this.set('contenido', editor1.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>
