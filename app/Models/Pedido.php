<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];
    
    //relacion muchos a muchos 
    public function products(){
        return $this->belongsToMany(Product::class);
    }

}
