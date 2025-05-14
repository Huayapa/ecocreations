<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $primaryKey = 'idProducto';
    protected $table = 'producto';
     protected $fillable = ["idProducto",'nombre', 'descripcion', 'precio', "stock", "imagen", "estado", "idCategoria"];
}
