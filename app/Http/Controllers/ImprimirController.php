<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ImprimirController extends Controller
{
    //
    public function index(){
       
        $pdf = PDF::loadView('livewire.admin.pdf.orden');

        return $pdf->stream();
        
    }
    public function pdf(){
       
        $pdf = PDF::loadView('livewire.admin.pdf.orden');

        return $pdf->download('orden.pdf');
        
    }
}
