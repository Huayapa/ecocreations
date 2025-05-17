<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pais;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function agregar(Request $request){
        // FUNCIONES LUEGO DE VALIDACION
        return redirect()->back()->with('boletasuccess', 'Pedido registrado correctamente.');
    }
}
