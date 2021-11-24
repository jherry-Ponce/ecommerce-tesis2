<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //each es como si estuviera dentro del for, recorrera los productos creados y
        //descargara 4 imagenes por producto.
        //each(function(Product $product) permite que se trabaje con el modelo product
        // Image::factory(4)->create manda que sean 4 imagenes por producto y asigana los otros valores
        Product::factory(250)->create()->each(function(Product $product){
            Image::factory(4)->create([

                'Imageable_id'=>$product->id,
                'imageable_type'=>Product::class
            ]);

        });
    }
}
