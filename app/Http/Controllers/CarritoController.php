<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pais;
use App\Models\Producto;
use App\Services\CarritoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller {   
    protected CarritoService $carritoService;
    public function __construct(CarritoService $carritoService) {
        $this->carritoService = $carritoService;
    }
    public function viewCart() {
        $carrito = $this->carritoService->obtenerProductos();
        $detalles = $this->carritoService->calcularTotales($carrito);
        return view('carrito', compact('carrito', 'detalles'));
    }
    public function viewBoleta(){
        $carrito = $this->carritoService->obtenerProductos();
        $detalles = $this->carritoService->calcularTotales($carrito);
        $paises = Pais::all();

        // Mostrar datos de cuenta "direccion"
        $user = Auth::user();
        $direccion = $user->cliente->direccion ?? null;
        if($paises) {
            return view("boleta", compact( 'carrito', 'detalles', "paises", 'user', 'direccion'));
        }
        return view('boleta', compact('carrito', 'detalles', 'user', 'direccion'));
    }
    public function agregar(Request $request)
    {
        $isok = $this->carritoService->agregarProducto($request->input('idProducto'), $request->input('cantidadprod'));

        return redirect()->back()->with($isok ? 'success' : 'error', $isok ? 'Producto agregado al carrito.' : 'Producto no encontrado o sin stock en tu carrito.');
    }
    public function eliminar(Request $request)
    {
        $isok = $this->carritoService->eliminarProducto($request->input('idProducto'));

        return redirect()->back()->with($isok ? 'success' : 'error', $isok ? 'Producto eliminado del carrito.' : 'El producto no está en el carrito.');
    }
}
