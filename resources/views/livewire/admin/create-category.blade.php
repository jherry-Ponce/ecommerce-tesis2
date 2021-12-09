<div class="mt-16 container ">
    <div class="container text-indigo-600 font-serif font-semibold text-2xl text-center">
        <h2>Crear categoria</h2>
    </div>
     <div class="">

        <div class=" container  shadow-lg flex flex-wrap   justify-center items-center my-3 py-2 gap-6" >
           <div class="w-full md:w-1/4">
                <x-jet-input type="text" class="w-full"  wire:model="name" placeholder="Ingrese nombre de la categoria"/>
                <x-jet-input-error for="name"/>
            </div>

           <div class="w-full md:w-1/4">
                <x-jet-input class="w-full bg-gray-100" readonly="true" type="text" wire:model="slug" />
                <x-jet-input-error for="slug"/>
            </div>

            <div class="w-full md:w-1/4">
                <x-jet-input type="text" class="w-full" wire:model="icon" placeholder="Ingrese el icono"/>
               
                    <x-jet-input-error for="icon"/>
            </div>

           <div class="w-full md:w-1/2 overflow-hidden">
                  <x-jet-input type="file" wire:model="image" />
                <x-jet-input-error for="image"/>
                </div>

         

            <div class="flex justify-end items-center mt-4">
        
                <x-jet-action-message class="mr-3" on="saved">
                    Actualizado
               </x-jet-action-message>    
       
               <x-jet-button 
                   wire:loading.attr="disabled"
                   wire:target="saved"
                   wire:click="saved"
                  >
                  Guardar
               </x-jet-button>
              
          </div>

        </div>

        {{--    ----------------------------- --}}
        <div class="  my-4">

            <table class="min-w-full border-collapse block md:table">
                <div class="px-6 py-4 ">
                    <x-jet-input  type="text" wire:model="search" class="w-full bg-gray-100" placeholder="Ingrese el producto a buscar"/>
                </div>
                @if ($categories->count())
                    <thead class="block md:table-header-group border">
                        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                            
                            <th class="bg-gray-100 p-2 text-gray-700 font-bold text-center block md:table-cell">Categoria</th>
                            <th class="bg-gray-100 p-2 text-gray-700 font-bold  text-center block md:table-cell">Foto</th>
                            <th class="bg-gray-100 p-2 text-gray-700 font-bold  text-center block md:table-cell">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="block md:table-row-group border">
                        @foreach ($categories as $category)     
                                <tr class=" border border-grey-500 md:border-none block md:table-row">
                                   
                                    <td class="p-2 text-left block md:text-center md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nombre</span>{!!$category->icon!!} {{$category->name}}</td>
                                    <td class="p-2 text-left block md:text-center md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Foto</span>  <img class="w-8 h-8  object-cover inline" src="/storage/{{$category->image}}"/></td>
                                    <td class="p-2 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Opciones</span>
                                            <div class="flex justify-center">
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </div>
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <a href="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg>
                                                    </a>  
                                                </div>
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>  
                @endif    
            </table>

        </div>
     </div>
</div>
