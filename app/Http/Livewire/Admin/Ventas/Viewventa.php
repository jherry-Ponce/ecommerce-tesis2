<?php

namespace App\Http\Livewire\Admin\Ventas;

use App\Models\DetVentas;
use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class Viewventa extends Component
{
    use WithPagination;
    public function render()
    { 
        $venta=Venta::paginate(5);
       
        return view('livewire.admin.ventas.viewventa', compact('venta'))->layout('layouts.admin');
    }
}
