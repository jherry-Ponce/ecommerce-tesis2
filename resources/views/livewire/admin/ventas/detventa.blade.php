<div class="mt-16" >
    <div class="  flex bg-white px-4 py-2 items-center shadow-xl" >
         <h2 class="font-semibold text-xl text-gray-800 leading-tight  ">
           Detalle Venta
         </h2>
         
        
    </div>
    
 <div class="container flex-1 flex-wrap mt-12 md:mt-0 pb-24 md:pb-5  border-2 border-gray-200">   
     
   {{--  <div class="mt-8">
       <strong> Vendedor: </strong> {{auth::user()}}
    </div> --}}

    <div class="mt-8">
        <strong> Cliente: </strong> {{$this->cliente->name}}
     </div>
     <x-table-responsive >

                 
               
                                         
                      <table class="w-1/4 md:w-full table-auto">
                         <thead>
                             <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                 <th class="py-3 px-6 text-left">boleta</th>
                                 <th class="py-3 pxborder-4 border-light-blue-500 border-opacity-25-6 text-left">Producto</th>
                                 <th class="py-3 px-6 text-center">Precio</th>
                                 <th class="py-3 px-6 text-center">Cantidad</th>
                                 <th class="py-3 px-6 text-center">total</th>
                             </tr>
                         </thead>
                         <tbody class="text-gray-600 text-sm font-light">
                             @foreach ($detalle as $detalles)          

                                 <tr class=" hover:bg-gray-100">
                                     <td class="py-3 px-6 text-left whitespace-nowrap">
                                         <div class="flex items-center">
                                             
                                             <span class="font-medium">000{{$ventas->id}}</span>
                                         </div>
                                     </td>

                                     <td class="py-3 px-6 text-left">
                                         <div class="flex items-center">
                                             <span>{{$detalles->products_id}}</span>
                                         </div>
                                     </td>


                                     <td class="py-3 px-6 text-center">
                                        <div class="flex items-center">
                                            <span>{{$detalles->precio}}</span>
                                        </div>
                                    
                                    </td>

                                     <td class="py-3 px-6 text-center">
                                         <div class="flex items-center justify-center">
                                            <span>{{$detalles->cantidad}}</span>
                                         </div>
                                     </td>

                                     
                                     

                                    
                                 </tr>

                         @endforeach
                         </tbody>
                     </table> 

                

              
                
     </x-table-responsive>  
 </div>     
</div>