<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddCartItem extends Component
{
    public $qty = 1;
    public $product,$quantity;

    public function mount(){
        $this->quantity=$this->product->quantity;
    }
    public function decrement(){
        if($this->qty>=2){
             $this->qty = $this->qty-1;
        
            }

    }

    public function increment(){
        /* $this->qty = $this->qty+1; */
        $this->qty++; 
        
    }
    public function render()
    {
        return view('livewire.add-cart-item');
    }
}
