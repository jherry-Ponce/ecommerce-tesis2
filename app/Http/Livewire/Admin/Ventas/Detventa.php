<?php

namespace App\Http\Livewire\Admin\Ventas;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Venta;
class Detventa extends Component
{
    public $ventas;
    public $cliente;


    public function mount(Venta $ventas)
    {
        $this->ventas = $ventas;
        $this->cliente=User::find($this->ventas->codcliente);
        

    }
    public function render()
    {
     
       $detalle= DB::table('detalleventa')
        ->where('venta_id','=',$this->ventas->id)
        ->get();
       
        return view('livewire.admin.ventas.detventa',compact('detalle'))->layout('layouts.admin');
    }
}
