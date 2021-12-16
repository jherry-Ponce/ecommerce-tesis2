<?php

namespace App\Http\Livewire\Admin\Orders;

use Livewire\Component;

class CreateOrders extends Component
{
    public function render()
    {
        return view('livewire.admin.orders.create-orders')->layout('layouts.admin');
    }
}
