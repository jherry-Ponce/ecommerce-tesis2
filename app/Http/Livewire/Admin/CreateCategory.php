<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
class CreateCategory extends Component
{

    use WithFileUploads;

    public $search,$name,$slug,$icon,$image,$modal=false;
    public $category,$modalEdit=false, $brand,$dato=[],$editImage,$brands;
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
    protected $listeners = ['delete'];
     /* el nombre de la funcion inicia con updated seguido del nombre de la variabre de la que dependera la primera letra en mayuscula */
    public function updatedName($value){
        $this->slug=Str::slug($value);
    }
     
    public function mount(){
        $this->brand=Brand::all();
    }

    public function abrirmodal(){
        $this->modal=true;
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
        $this->emit('saved');
    }

    public function delete( $category){
        Category::destroy($category);
    }

    public function openmodal($category){
        
       $this->modalEdit = true;

        $this->category= Category::find($category);
        $this->brands=$this->category->brands;
        /* dd($this->brands); */
        $this->name=$this->category->name;
        $this->slug=$this->category->slug;
        $this->icon=$this->category->icon;
        $this->image=$this->category->image; 
        if ($this->modal==false) {
            # code...
            $this->reset('editImage');  
        }
         
    }

    public function update(){
        
            if ($this->editImage) {
                Storage::delete($this->category->image);
                $this->category->update([
                    'name'=>$this->name,
                    'slug'=>$this->slug,
                    'icon'=>$this->icon,
                    'image'=> $this->editImage->store('categories'),
                ]);
            }
            else{
                $this->category->update([
                    'name'=>$this->name,
                    'slug'=>$this->slug,
                    'icon'=>$this->icon,
                    'image'=> $this->image,
                ]);
            }
            $this->category->brands()->sync($this->dato);
            $this->modalEdit=false;
            $this->reset(
            'name',
            'slug',
            'icon',
            'image');
    }



    public function render()
    {
        $marca= $this->brand; 
     
        /*  dd($marca); */
        $categories=Category::where('name','like','%'. $this->search .'%')->get();
        
        return view('livewire.admin.create-category',compact('categories', 'marca',))->layout('layouts.admin');
    }
}
