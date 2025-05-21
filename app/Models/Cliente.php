<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'idCliente';
    public $timestamps = false;

    protected $fillable = ['telefono', 'dni', 'idUsuario', 'idDireccion'];
    // Busca en la tabla Usuarios la fila cuyo idUsuario coincida con el id.
    public function usuario(){
        return $this->belongsTo(User::class, 'idUsuario');
    }
    public function direccion(){
        return $this->belongsTo(Direccion::class, 'idDireccion', 'idDireccion');
    }
}
