<?php

namespace App\Models;

use Database\Factories\ProductoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function proveedores(){
        return 
        $this->belongsToMany("App\Models\Proveedor");     
    }
    

    public function crearProductos(){
        Producto::factory()->count(10)->create();
    }
}
