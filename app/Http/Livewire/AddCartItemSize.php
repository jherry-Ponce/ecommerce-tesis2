<?php

namespace App\Http\Livewire;

use App\Models\size;
use Livewire\Component;


class AddCartItemSize extends Component

{   
    public $product, $sizes;
    public $size_id="";
    public $colors=[];
    public function mount(){
        $this->sizes=$this->product->sizes;
    }
    public function updatedSizeId($value){
        $size = size::find($value);

        $this->colors = $size->colors;


    }
  
    public function render()
    {
        /* dd($this->product); */
        return view('livewire.add-cart-item-size');
    }

    
}
