<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuario';
    protected $primaryKey = 'idUsuario';
    public $timestamps = false;

    protected $fillable = ['nombre', 'correo', 'contra', 'tipo'];
    // Busca en la tabla clientes la fila cuyo idUsuario coincida con el id del usuario actual.
    public function cliente(){
        return $this->hasOne(Cliente::class, 'idUsuario');
        //hasOne Apunta a la clave FK
        //belongsTo Es al que tiene la clave FK
    }
}
