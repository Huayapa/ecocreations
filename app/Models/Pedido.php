<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $primaryKey = 'idPedido';
    public $timestamps = false;
    protected $fillable = [
        'idPedido',
        'fechaPedido',
        'totalPrecio',
        'totalCantidad',
        'estado',
        'idCliente',
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'idCliente'); //Relacion con cliente
    }

    public function detalles(){
        return $this->hasMany(DetallePedido::class, 'idPedido'); //Relacion con pedido
    }
}
