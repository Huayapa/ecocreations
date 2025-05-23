<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use function PHPSTORM_META\map;

class AdminController extends Controller
{
    public function index() {
        // Datos de usuarios
        $user = Auth::user();
        // $pedidos = 5;
        // Datos total Ventas
        $ventas = Venta::sum("total");
        // Clientes registrados
        $cliente = Cliente::count("idCliente");
        // Productos con poco stock
        $productominstock = Producto::orderBy('stock', 'asc')->first();
        // Datos de pedidos
        $pedidos = Pedido::all();
        return view('admin.inicio', compact( 
            'user', 
            'pedidos',
            "ventas",
            "cliente",
            "productominstock"
        ));
    }
}
