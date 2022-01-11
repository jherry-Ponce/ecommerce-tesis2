<?php

namespace App\Http\Livewire\Admin\Ventas;
use App\Models\Venta;
use Livewire\Component;

class Viewventa extends Component
{
    public function render()
    {
        $venta=Venta::paginate(10);
        return view('livewire.admin.ventas.viewventa', compact('venta'))->layout('layouts.admin');
    }
}
