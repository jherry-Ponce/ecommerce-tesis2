<div class="  fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
              
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        
                        
                        <!-- El input para seleccionar los archivos, fíjate en su id -->
                        <div>
                            
                            <x-jet-input type="file"  id="seleccionArchivos" accept="image/*"  wire:model="imagen" />
                            <x-jet-input-error for="imagen"/>
                        </div>
                       
                        <div class="mt-4">
                             <!-- La imagen que vamos a usar para previsualizar lo que el usuario selecciona -->
                            <img  class="  w-full h-96  {{--object-cover --}} object-scale-down  object-center" id="imagenPrevisualizacion" >
                        </div>
                       
                        <div class="mt-4">
                            <x-jet-label value="Nombre" />
                            <x-jet-input class="w-full" type="text" wire:model="Nombre" placeholder="Ingrese nombre" />
                            <x-jet-input-error for="Nombre"/>
                        </div>

                         {{-- descripcion --}}
    
                        <div class="mb-4 mt-4" >
                            <div  wire:ignore>
                                <x-jet-label value="Descripcion"/>
                                <textarea class="w-full form-control" rows="6"
                                wire:model="description"
                                x-data x-init="ClassicEditor
                                .create($refs.miEditor)
                                .then(function(editor){
                                    editor.model.document.on('change:data',()=>{
                                    @this.set('description',editor.getData())
                                })
                                })
                                .catch( error => {
                                    console.error( error );
                                } );"
                                x-ref="miEditor">

                                </textarea>
                            </div>
                            <x-jet-input-error for="description"/>

                        </div>

                        <div>
                            <span>Publicar</span> <x-jet-input type="radio" wire:model="estado" value="1" />
                            <span>Borrador</span> <x-jet-input type="radio" wire:model="estado" value="0" />
                        </div>

                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="saved()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                            </span>

                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                            </span>
                        </div>

                    </div>
                 
            </div>


    </div>
</div>

<script >

    // Obtener referencia al input y a la imagen

    const $seleccionArchivos = document.querySelector("#seleccionArchivos"),
    $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

    // Escuchar cuando cambie
    $seleccionArchivos.addEventListener("change", () => {
    // Los archivos seleccionados, pueden ser muchos o uno
    const archivos = $seleccionArchivos.files;
    // Si no hay archivos salimos de la función y quitamos la imagen
       vb
    // Ahora tomamos el primer archivo, el cual vamos a previsualizar
    const primerArchivo = archivos[0];
    // Lo convertimos a un objeto de tipo objectURL
    const objectURL = URL.createObjectURL(primerArchivo);
    // Y a la fuente de la imagen le ponemos el objectURL
    $imagenPrevisualizacion.src = objectURL;
    });

</script>
