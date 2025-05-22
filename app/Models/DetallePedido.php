<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    protected $table = 'detallepedido';
    public $timestamps = false;

    protected $fillable = [
        'idPedido',
        'idProducto',
        'cantidad',
        'precioUnidad',
        'subtotal',
    ];

    public function pedido(){
        return $this->belongsTo(Pedido::class, 'idPedido');
    }

    public function producto(){
        return $this->belongsTo(Producto::class, 'idProducto');
    }
}
