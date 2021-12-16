<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const borrador=1;
    const publicado=2;
    protected $guarded = ['id','created_at','updated_at'];

    //relacion uno a muchos inversa
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    //relacion uno a muchos inversa
    public function Subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //relacion muchos a muchos 
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    //relacion uno a muchos inversa
    public function sizes(){
        return $this->hasMany(size::class);
    }

    //relacion uno a muchos polimorfica
    public function images(){
        return $this->morphMany(Image::class, "imageable");
    }

      //url amigable
      public function getRouteKeyName(){
        return 'slug';
    }

    //relacion muchos a muchos 
    public function pedidos(){
        return $this->belongsToMany(Pedido::class);
    }


}
