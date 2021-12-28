<?php

namespace App\Http\Livewire;

use App\Models\size;
use Livewire\Component;


class AddCartItemSize extends Component

{   
    public $product, $sizes,$qty=1;
    public $size_id="";
    public $color_id="";
    public $quantity = 0;
    public $colors=[];
    public $options = [];
    public function mount(){
        $this->sizes=$this->product->sizes;
    }
    public function updatedSizeId($value){
        $size = size::find($value);

        $this->colors = $size->colors;


    }
    public function updatedColorId($value){
        $size = Size::find($this->size_id);
        $color = $size->colors->find($value);
        $this->quantity=$size->colors->find($value)->pivot->quantity;
       /*  $this->quantity = qty_available($this->product->id, $color->id, $size->id); */
        $this->options['color'] = $color->name;
    }
  
    public function render()
    {
        /* dd($this->product); */
        return view('livewire.add-cart-item-size');
    }

    
}
