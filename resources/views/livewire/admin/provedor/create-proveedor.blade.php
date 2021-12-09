<div>
    <div>
        <div>
            <h2 class="text-gray-500 font-serif text-xl font-semibold  my-3 ">Registro de Proveedorees</h2>
        </div>
    </div>


    <div class="grid grid-cols-2 gap-6">
        <div>
            <x-jet-label value="Nombre"/>
            <x-jet-inpunt type="text" class="w-full"  wire:model="name" placeholder="Ingrese nombre del Proveedor">
        </div>

        <div>
            <x-jet-label value="Correo Electronico"/>
            <x-jet-inpunt type="text" class="w-full"  wire:model="name" placeholder="Ingrese el correo electronico">
        </div>
        
    </div>

    <div class="grid grid-cols-2 gap-6">
        <div>
            <x-jet-label value="Numero de Ruc"/>
            <x-jet-inpunt type="text" class="w-full"  wire:model="name" placeholder="Ingrese numero de Ruc">
        </div>

        <div>
            <x-jet-label value="Direccion"/>
            <x-jet-inpunt type="text" class="w-full"  wire:model="name" placeholder="Ingrese el Pais">
        </div>
                
    </div>
  
    <div class="">  
            <x-jet-label value="Numero de Contacto"/>
            <x-jet-inpunt type="text" class="w-full"  wire:model="name" placeholder="Ingrese numero de contacto">                
    </div>

</div>
