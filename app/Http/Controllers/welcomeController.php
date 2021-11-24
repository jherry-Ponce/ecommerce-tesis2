<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Category;
class welcomeController extends Controller
{
    //se utiliza invoke cuando se trabaja con un unico metodo
    public function __invoke(){
        
        $categories = Category::all();
  
        return view('welcome', compact('categories'));
    }
}
