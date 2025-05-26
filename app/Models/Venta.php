<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'venta';
    protected $primaryKey = 'idVenta';
    public $timestamps = false;
    protected $fillable = [
        'idPedido',
        'metodoPago',
        'estadoPago',
        'fechaPago',
        'igv',
        'total',
    ];
    public function pedido(){
        return $this->belongsTo(Pedido::class, 'idPedido'); //Relacion con cliente
    }
}
