<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Category;
use App\Models\Order;
use App\Models\Slider;

class welcomeController extends Controller
{
    //se utiliza invoke cuando se trabaja con un unico metodo
    public function __invoke(){
        
        if (auth()->user()) {

            $pendiente = Order::where('status', 1)->where('user_id', auth()->user()->id)->count();

            if ($pendiente) {

                $mensaje = "Usted tiene $pendiente ordenes pendientes. <a class='font-bold' href='" . route('orders.index') ."?status=1'>Ir a pagar</a>";

                session()->flash('flash.banner',$mensaje);
            }

        }

        $categories = Category::all();
       
        $sliders= Slider::all();
        /* notify()->success('Welcome to Laravel Notify ⚡️'); */
        return view('welcome', compact('categories','sliders'));
    }
}
