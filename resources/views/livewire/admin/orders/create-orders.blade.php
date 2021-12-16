<div class="mt-14">

    <div class="  flex bg-white pl-4 py-2 items-center shadow-xl px-4 mb-4" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight  ">
            Crear Orden
        </h2>
        
        <x-danger-enlace class="ml-auto" href=" {{-- {{route('admin.ordercreate')}} --}}">
            Nuevo
        </x-danger-enlace> 
   </div>

    <div class="container mt-8 border p-2 shadow-lg shadow-indigo-500/50">

        <div class="grid grid-cols-3 gap-6 mb-4">
     
             <div class="w-full col-span-2 ">
                 <x-jet-label value="Proveedor"/>
                 <select class="w-full form-control py-2 px-2" {{-- wire:model="category_id" --}}>
                     <option value="" selected disabled>Seleccione el proveedor</option>
     
                    {{--  @foreach ($categories as $category)
     
                     <option value="{{$category->id}}">{{$category->name}}</option>
                         
                     @endforeach --}}
     
                 </select>
              
             </div>
     
             <div class="w-full">
                 <x-jet-label value="Impuesto"/>
                 <x-jet-input class="w-full" type="number" />
              
             </div>
     
        </div>
     
        <div class="mb-4">
             <div class="w-full">
                <x-jet-label value="Codigo de barras"/>
                <x-jet-input class="w-full" type="number" />
             </div>
        </div>
     
     
        <div class="grid grid-cols-6 gap-2">
             <div class="w-full col-span-3">
                <x-jet-label value="Producto"/>
                 <select class="w-full form-control py-2 px-2" {{-- wire:model="category_id" --}}>
                     <option value="" selected disabled>Seleccione un producto</option>
     
                    {{--  @foreach ($categories as $category)
     
                     <option value="{{$category->id}}">{{$category->name}}</option>
                         
                     @endforeach --}}
     
                 </select>
             </div>
     
     
             <div class="col-span-2 ">
                 <x-jet-label value="Cantidad"/>
                 <x-jet-input class="w-full" type="number" />
             </div>
     
             <div class="col-span-1">
                <x-jet-label value="Precio de Compra"/>
                <x-jet-input type="number" class="w-auto" />
             </div>
     
        </div>
     
     </div>

</div>