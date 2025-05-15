<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Services\CarritoService;
use Illuminate\Http\Request;

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
        return view('boleta', compact('carrito', 'detalles'));
    }
    public function agregar(Request $request)
    {
        $isok = $this->carritoService->agregarProducto($request->input('idProducto'));

        return redirect()->back()->with($isok ? 'success' : 'error', $isok ? 'Producto agregado al carrito.' : 'Producto no encontrado.');
    }
    public function eliminar(Request $request)
    {
        $isok = $this->carritoService->eliminarProducto($request->input('idProducto'));

        return redirect()->back()->with($isok ? 'success' : 'error', $isok ? 'Producto eliminado del carrito.' : 'El producto no está en el carrito.');
    }
}
