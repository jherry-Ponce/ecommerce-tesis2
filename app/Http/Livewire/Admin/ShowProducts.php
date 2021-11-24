<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
class ShowProducts extends Component
{
    use WithPagination;
    public $search;
    /* reseta la busqueda  lo realiza sin importar en que agination se encuentre */
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        $products=Product::where('name','like','%'. $this->search .'%')->paginate(10);
        return view('livewire.admin.show-products', compact('products'))->layout('layouts.admin');
    
    }
}
