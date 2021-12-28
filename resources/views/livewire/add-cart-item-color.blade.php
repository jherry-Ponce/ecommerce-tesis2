<div  x-data>
   <p class="text-xl text-gray-700 font-semibold">Color</p>

   <select wire:model="color_id" class="form-control w-full">
       <option value="" selected disabled>Seleccionar un color</option>
       @foreach ($colors as $color)
            <option value="{{$color->id}}">{{$color->name}}</option>
           
       @endforeach
   </select>
   
   <div class="flex mt-4">
        <div>
        {{-- •	x-bind: Asigna el valor de un atributo  --}}
        {{-- de esta manera se logra acceder al valor dela variable qty $wire.qty --}}
        <x-jet-secondary-button 
        
        disabled
        x-bind:disabled="$wire.qty <=1"
        {{--  wire:loading.attr="disabled" con esto cambia la propiedad mientras se ejecuta el metodo decrement --}}
        wire:loading.attr="disabled"
        {{-- especifica que el se desabilite solo cuando usa el metodo decremenmt --}}
        wire:target="decrement"
        wire:click="decrement"> 
            
            -
        </x-jet-secondary-button>

        <span class="mx-2 text-gray-700">{{$qty}}</span>

        <x-jet-secondary-button 
        
        x-bind:disabled="$wire.qty >= $wire.quantity"
        wire:loading.attr="disabled"
        wire:target="increment"
        wire:click="increment"> 
            +
        </x-jet-secondary-button>
        </div>
        
        <div class=" flex-1 ml-4  ">
        <x-button-dinamic color='indigo' class="w-full"
        x-bind:disabled="!$wire.quantity"> 
            Agregar al carrito de compras
        </x-button-dinamic>
        </div>
   </div>

</div>
  