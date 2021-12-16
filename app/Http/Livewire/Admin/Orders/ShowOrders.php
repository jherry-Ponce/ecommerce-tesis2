<?php

namespace App\Http\Livewire\Admin\Orders;

use Livewire\Component;

class ShowOrders extends Component
{
    public function render()
    {
        return view('livewire.admin.orders.show-orders')->layout('layouts.admin');
    }
}
