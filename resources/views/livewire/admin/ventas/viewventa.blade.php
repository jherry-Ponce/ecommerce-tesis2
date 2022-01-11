<div class="mt-16" >
    <div class="  flex bg-white px-4 py-2 items-center shadow-xl" >
         <h2 class="font-semibold text-xl text-gray-800 leading-tight  ">
             Lista Productos
         </h2>
         
         <x-danger-enlace class="ml-auto" href="{{route('createventa.index')}}">
             Agregar Venta
         </x-danger-enlace> 
    </div>
    
 <div class="container flex-1 flex-wrap mt-12 md:mt-0 pb-24 md:pb-5 ">      

     <x-table-responsive >

                 <div class="px-6 py-4 ">
                     <x-jet-input  type="text" wire:model="search" class="w-full bg-gray-100" placeholder="Ingrese el producto a buscar"/>
                 </div>
                 @if ($venta->count())
                                         
                      <table class="w-1/4 md:w-full table-auto">
                         <thead>
                             <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                 <th class="py-3 px-6 text-left">id</th>
                                 <th class="py-3 pxborder-4 border-light-blue-500 border-opacity-25-6 text-left">Fecha</th>
                                 <th class="py-3 px-6 text-center">Estado</th>
                                 <th class="py-3 px-6 text-center">Total</th>
                                 <th class="py-3 px-6 text-center">Opciones</th>
                             </tr>
                         </thead>
                         <tbody class="text-gray-600 text-sm font-light">
                             @foreach ($venta as $ventas)          

                                 <tr class=" hover:bg-gray-100">
                                     <td class="py-3 px-6 text-left whitespace-nowrap">
                                         <div class="flex items-center">
                                             
                                             <span class="font-medium">{{$ventas->id}}</span>
                                         </div>
                                     </td>
                                     <td class="py-3 px-6 text-left">
                                         <div class="flex items-center">
                                             
                                             
                                             
                                             <span>{{$ventas->created_at}}</span>
                                         </div>
                                     </td>


                                     <td class="py-3 px-6 text-center">
                                        @switch($ventas->status)
                                            @case(0)
                                                <span class="bg-red-200 font-semibold text-white py-1 px-3 rounded-full text-xs">Cancelado</span>
                                                @break
                                            @case(1)
                                                <span class="bg-green-400 font-semibold text-white py-1 px-3 rounded-full text-xs">Entregado</span>
                                                @break
                                            @default
                                                
                                        @endswitch
                                    
                                    </td>

                                     <td class="py-3 px-6 text-center">
                                         <div class="flex items-center justify-center">
                                         S/.209.95
                                         </div>
                                     </td>

                                     

                                     <td class="py-3 px-6 text-center">
                                         <div class="flex item-center justify-center">
                                             <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <a href="{{route('detventa.index',$ventas)}} ">
                                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                 </svg>
                                                </a> 
                                             </div>
                                             <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                 <a href="{{-- {{route('detventa.index',$ventas)}} --}}">
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
                     </table> 

                 @else
                     <div class="py-6 px-4">
                         No se encuentran datos coincidentes
                     </div>
                 @endif

                 @if ($venta->hasPages())
                     <div class="px-6 py-4  ">
                         {{$venta->links()}}
                     </div>
                 @endif 
                
     </x-table-responsive>  
 </div>     
</div>