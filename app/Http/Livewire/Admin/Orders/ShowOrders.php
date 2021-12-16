<?php

namespace App\Http\Livewire\Admin\Orders;

use App\Models\Pedido;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowOrders extends Component
{
    public function render()
    {
        
        $ordenes=Pedido::all();
        return view('livewire.admin.orders.show-orders',compact('ordenes'))->layout('layouts.admin');
    }
}
