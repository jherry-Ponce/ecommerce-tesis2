<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
class CreateCategory extends Component
{

    use WithFileUploads;

    public $search,$name,$slug,$icon,$image;
    protected $rules=[
        'name'=>'required',
        'slug'=>'required|unique:categories,slug',
        'icon'=>'required',
        'image'=>'required|image|max:2048',

    ] ;


    protected $validationAttributes=[
        'name'=>'nombre',
        'slug'=>'slug',
        'icon'=>'icono',
        'image'=>'imagen'
    ];

     /* el nombre de la funcion inicia con updated seguido del nombre de la variabre de la que dependera la primera letra en mayuscula */
    public function updatedName($value){
        $this->slug=Str::slug($value);
    }

    public function saved(){
        /* $rules=$this->rules; */
        $this->validate();
      $image= $this->image->store('categories');
        
       Category::create([
            'name'=>$this->name,
            'slug'=>$this->slug,
            'icon'=>$this->icon,
            'image'=> $image,

        ]);
        $this->reset();
      
    }

    public function render()
    {
        $categories=Category::where('name','like','%'. $this->search .'%')->paginate(10);
        return view('livewire.admin.create-category',compact('categories'))->layout('layouts.admin');
    }
}
