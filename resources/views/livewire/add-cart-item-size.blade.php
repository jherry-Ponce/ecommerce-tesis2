<div>
    <div>
        <p>Tallas</p>
        <select wire:model="size_id" class="form-control w-full">
            <option value="" selected disabled>Seleccione una talla</option>
            @foreach ($sizes as $size)
                <option value="{{$size->id}}">{{$size->name}}</option>
                
            @endforeach 
        </select>
    </div>

    <div>
            <p >Color</p>

     <select  class="form-control w-full">
        <option value="" selected disabled>Seleccionar un color</option>
        @foreach ($colors as $color)
                <option value="{{$color->id}}">{{$color->name}}</option>
            
        @endforeach
     </select>
    </div>
</div>

