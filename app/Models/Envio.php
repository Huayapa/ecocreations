<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    protected $table = 'envio';
    public $timestamps = false;
    protected $primaryKey = 'idEnvio';
    protected $fillable = [
        'metodoEnvio',
        'estadoEnvio',
        'motivoCancelacion',
        'idVenta',
        'idDireccion',
    ];
}
