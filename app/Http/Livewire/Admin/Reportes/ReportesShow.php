<?php

namespace App\Http\Livewire\Admin\Reportes;

use App\Models\Venta;

use Livewire\Component;
use PDF;
class ReportesShow extends Component
{

    public $inicial, $final,$datos;
    public $monto=0;
   
    public $rules=[
        'inicial' => 'required',
        'final' => 'required',
       
    ];

    public function filtro(){

        $this->validate($this->rules);
        
            $this->reset('datos','monto'); 
            $this->datos=Venta::whereDate('created_at','>=',$this->inicial)->whereDate('created_at','<=',$this->final)->get();
            foreach ($this->datos as $key ) {
                $this->monto =  $this->monto + $key->total;
            }
            $this->reset('inicial'); 
 
    }
  

    public function render()
    {
        return view('livewire.admin.reportes.reportes-show')->layout('layouts.admin');
    }
}
