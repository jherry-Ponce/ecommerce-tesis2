<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddCartItemColor extends Component
{
    public $product,$colors,$color_id="";

    public $qty=1;
    public $quantity=0;

    public function mount(){
        $this->colors = $this->product->colors;
    }
    public function render()
    {
        
        return view('livewire.add-cart-item-color');
    }

    /* esta funcion se3 aCTUALIZA CADA VEZ QUE CAMBIE EL VALOR DE LA VARIABLE DECLARADA */
    public function updatedColorId($value)
    {
        $this->quantity= $this->product->colors->find($value)->pivot->quantity;

    }
}
