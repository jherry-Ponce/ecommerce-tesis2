<div class="mt-14">

  <div class="  flex bg-white pl-4 py-2 items-center shadow-xl px-4 mb-4" >
      <h2 class="font-semibold text-xl text-gray-800 leading-tight  ">
          Cliente
      </h2>
      
    
 </div>

  <div class="container mt-8 border py-8 shadow-lg shadow-indigo-500/50">

      <div class="grid grid-cols-3 gap-6 mb-4">
   
           <div class="w-full col-span-2 ">
               <x-jet-label value="TipoDoc"/>
               <select class="w-full form-control py-2 px-2" wire:model="TipoDoc" >
                   <option value="" selected disabled>Tipo de Documento</option>
                   <option value="DNI" selected >DNI</option>
                   <option value="RUC" selected >RUC</option>
                   <option value="cedula" selected >CEDULA</option>
               {{--      @foreach ($ as $)
   
                   <option value="{{}}">{{}}</option>
                       
                   @endforeach  --}}
   
               </select>
            
           </div>
   
           <div class="w-full">
               <x-jet-label value="NroDoc"/>
               <x-jet-input wire:model="doc" class="w-full " type="number" />
            
           </div>
   
      </div>

      <div class="grid grid-cols-6 gap-2">
        <div class="w-full col-span-3">
          <x-jet-label value="Nombre Completo"/>
          <x-jet-input wire:model="nombre" class="w-full" type="text" />
        </div>


        <div class="col-span-2 ">
          <x-jet-label value="Telefono"/>
          <x-jet-input wire:model="telf" class="w-full" type="number" />
        </div>

        <div class="col-span-1">
           <x-jet-label value="Correo Electronico"/>
           <x-jet-input type="email" wire:mo0del="correo" wire:model="correo" class="w-auto" />
        </div>

      </div>
   
      
      <div class="mt-4 flex justify-end">
          <x-jet-button 
             {{--  wire:loading.attr="disabled"
              wire:target="save"--}}
              wire:click="search" 
              class=""
             >
                 Buscar
          </x-jet-button>
      </div>

    
   
  </div>

  



</div>