<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        // Datos de usuarios
        $user = Auth::user();
        $pedidos = 5;
        // Datos total Ventas
        // Clientes registrados
        // Datos de pedidos
        return view('admin.inicio', compact( 'user', 'pedidos'));
    }
}
