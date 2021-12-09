<div>
    <div class="max-w-4xl mx-auto mt-16 px-4 sm:px-6 lg:px-8 py-12 text-gray-700 bg-white shadow-xl">
        <h2 class="text-3xl text-center font-semibold mb-8">Completa esta informacion para actualizar un producto</h2>
        
        <div class="grid grid-cols-2  gap-6 mb-4">
            <div>
                <x-jet-label value="Categorias"/>
                <select class="w-full form-control py-2 px-2" wire:model="category_id">
                    <option value="" selected disabled>Seleccione una categoria</option>
    
                    @foreach ($categories as $category)
    
                    <option value="{{$category->id}}">{{$category->name}}</option>
                        
                    @endforeach
    
                </select>
                <x-jet-input-error for="category_id"/>
            </div>
    
            <div>
                <x-jet-label value="SubCategorias"/>
                <select class="w-full form-control py-2 px-2" wire:model="product.subcategory_id">
                    <option value="" selected disabled>Seleccione una subcategoria</option>
    
                    @foreach ($subcategories as $subcategory)
    
                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                        
                    @endforeach
    
                </select>
                <x-jet-input-error for="product.subcategory_id"/>
            </div>
        </div>
    
        {{-- Nombre Porducto --}}
        <div class="mb-4">
            <x-jet-label value="Nombre"/>
            <x-jet-input type="text" class="w-full" wire:model="product.name" placeholder="Ingrese nombre del producto"/>
            <x-jet-input-error for="product.name"/>
        </div>
    
        {{-- slug producto --}}
        <div class="mb-4">
            <x-jet-label value="Slug"/>
            <x-jet-input type="text" class="w-full bg-gray-100" disabled wire:model="product.slug" placeholder="Ingrese slug del producto"/>
            <x-jet-input-error for="product.slug"/>
        </div>
    
        {{-- descripcion --}}
        
        <div class="mb-4" >
            <div  wire:ignore>
                <x-jet-label value="Descripcion"/>
                <textarea class="w-full form-control" rows="6"
                wire:model="product.description"
                x-data x-init="ClassicEditor
                .create($refs.miEditor)
                .then(function(editor){
                    editor.model.document.on('change:data',()=>{
                    @this.set('product.description',editor.getData())
                })
                })
                .catch( error => {
                    console.error( error );
                } );"
                x-ref="miEditor">
    
                </textarea>
            </div>
            <x-jet-input-error for="product.description"/>
    
        </div>
    
        <div class="grid grid-cols-2 mb-4 gap-6">
            <div class="w-full">
                <x-jet-label value="Precio" />
                 <x-jet-input type="number" wire:model="product.price" step=".01"/>{{-- step define el ingreso de decimales --}}
                 <x-jet-input-error for="product.price"/>
            </div>
    
            <div>
                @if ($this->subcategory)    
                    @if (!$this->subcategory->color && !$this->subcategory->size)
                        <div class="w-full">
                            <x-jet-label value="Cantidad" />
                            <x-jet-input type="number" wire:model="product.quantity"/>
                            <x-jet-input-error for="product.quantity"/>
                        </div>
                    @endif
                @endif
            </div>
           
        </div>
    
       <div class="flex justify-end items-center mt-4">
        
             <x-jet-action-message class="mr-3" on="saved">
                 Actualizado
            </x-jet-action-message>    
    
            <x-jet-button 
                wire:loading.attr="disabled"
                wire:target="save"
                wire:click="save"
               >
                    Actualizar Producto
            </x-jet-button>
           
       </div>
        
    </div>
    
</div>
