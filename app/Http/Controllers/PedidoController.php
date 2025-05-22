<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function agregar(Request $request){
        // Verificar si el usuario está logueado
        if (!Auth::check()) {
            return redirect()->back()->with('boletaerror', 'Por favor, inicia sesión para continuar.');
        }
        $carrito = session('carrito');
        if (!$carrito || count($carrito) === 0) {
        return redirect()->back()->with('boletaerror', 'Tu carrito está vacío. Agrega productos antes de continuar.');
        }

        session()->forget('carrito');
        // FUNCIONES LUEGO DE VALIDACION
        return redirect()->back()->with('boletasuccess', 'Pedido registrado correctamente.');
    }
}
