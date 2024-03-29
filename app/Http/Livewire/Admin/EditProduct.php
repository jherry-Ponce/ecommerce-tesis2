<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
class EditProduct extends Component
{
    public $product,$categories,$subcategories;
    public $category_id,$slug;

    protected $rules=[
        'product.category_id' => 'required',
        'product.subcategory_id' => 'required',
        'product.name' => 'required',
        'product.slug' => 'required|unique:products,slug',
        'product.description' => 'required',
        'product.priceV' => 'required',
        'product.priceC' => 'required',
        'product.quantity'=>'numeric'
    ];

    /* protected $listeners = ['refreshProduct', 'delete']; */

    protected $listeners = ['refreshProduct', 'delete'];

    public function mount(Product $product){
        $this->product = $product;

        $this->categories = Category::all();

        $this->category_id = $product->subcategory->category->id;

        $this->subcategories = Subcategory::where('category_id', $this->category_id)->get();

        $this->slug = $this->product->slug;

        
    }


      public function refreshProduct(){
        $this->product = $this->product->fresh();
    } 
 
    public function updatedProductName($value){
        $this->slug = Str::slug($value);
    }

    public function updatedCategoryId($value){
        $this->subcategories = Subcategory::where('category_id', $value)->get();

       
        /* $this->reset(['subcategory_id', 'brand_id']); */
        $this->product->subcategory_id = "";
       
    }

    public function getSubcategoryProperty(){
        return Subcategory::find($this->product->subcategory_id);
    }

    public function save(){
        $rules = $this->rules;
        $rules['slug'] = 'required|unique:products,slug,' . $this->product->id;

        if ($this->product->subcategory_id) {
            if (!$this->subcategory->color && !$this->subcategory->size) {
                $rules['product.quantity'] = 'required|numeric';
            }
        }

        $this->validate($rules);
        
        $this->product->slug = $this->slug;

        $this->product->save();

        $this->emit('saved');
    }

    public function deleteImage(Image $image){
        Storage::delete([$image->url]);
        $image->delete();

        $this->product = $this->product->fresh();
    }

    public function delete(){

        $images = $this->product->images;

        foreach ($images as $image) {
            Storage::delete($image->url);
            $image->delete();
        }

        $this->product->delete();

        return redirect()->route('admin.index');

    } 
    public function render()
    {
        return view('livewire.admin.edit-product')->layout('layouts.admin');
    }
}
