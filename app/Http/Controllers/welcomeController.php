<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Category;
use App\Models\Slider;

class welcomeController extends Controller
{
    //se utiliza invoke cuando se trabaja con un unico metodo
    public function __invoke(){
        
        $categories = Category::all();
        $sliders= Slider::all();
        return view('welcome', compact('categories','sliders'));
    }
}
