<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Str;
class EditProduct extends Component
{
    public $product,$categories,$subcategories;
    public $category_id;

    protected $rules=[
        'product.category_id' => 'required',
        'product.subcategory_id' => 'required',
        'product.name' => 'required',
        'product.slug' => 'required|unique:products,slug',
        'product.description' => 'required',
        'product.price' => 'required',
        'product.quantity'=>'numeric'
    ];


    public function mount(Product $product)
    {
        $this->product = $product;
        $this->categories=Category::all();

        $this->category_id=$product->Subcategory->category->id;
        $this->subcategories=Subcategory::where('category_id', $this->category_id)->get(); 
    }

    public function updatedCategoryId($value){
        $this->subcategories=Subcategory::where('category_id',$value)->get(); 
      /*   $this->reset('subcategory_id'); */
        $this->product->subcategory_id="";
    }

    public function getSubcategoryProperty(){
        return Subcategory::find($this->product->subcategory_id);
    }
    public function updatedProductName($value){
        $this->product->slug=str::slug($value);
    }
    public function save(){
        $rules=$this->rules;

        $rules['product.slug']= 'required|unique:products,slug'.$this->product->id;
        if ($this->product->subcategory_id) {
            if (!$this->subcategory->color && !$this->subcategory->size) {
                $rules['product.quantity']='required|numeric';
            }
        }

        $this->validate($rules);
        $this->product->slug= $this->slug;

        $this->product->save();
    }
    public function render()
    {
        return view('livewire.admin.edit-product')->layout('layouts.admin');
    }
}
