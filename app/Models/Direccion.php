<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direccion';
    protected $primaryKey = 'idDireccion';
    public $timestamps = false;
    protected $fillable = [
        'calle',
        'codigoPostal',
        'ciudad',
        'idPais',
    ];
}
