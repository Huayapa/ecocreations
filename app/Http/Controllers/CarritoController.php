<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class CarritoController extends Controller
{   
    // Diriguirse a la pagina carrito
    public function view() {
        $carrito = session()->get('carrito', []);
        return view('carrito', compact('carrito'));
    }

    // SE NECESITA EL ID DEL PRODUCTO PARA FUNCIONAR "idProducto"
    public function mostrar() {
        $carrito = session()->get('carrito', []);
        return view('nav', compact('carrito'));
    }
    public function agregar(Request $request) { // POST
        // Buscar producto por id
        $id = $request->input('idProducto'); //Acceder al valor del input
        $producto = Producto::find($id);
        if (!$producto) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }
        // Agrega session y si existe en la lista, solo lo suma
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$id])) {
            $carrito[$id]['stock']++;
        } else {
            $carrito[$id] = [
                "idProducto" => $producto->idProducto,
                'nombre' => $producto->nombre,
                'descripcion' => $producto->descripcion,
                'precio' => $producto->precio,
                "stock" => 1,
                "imagen" => base64_encode($producto->imagen),
                "estado" => $producto->estado,
                "idCategoria" => $producto->idCategoria
            ];
            // formatear imagen
        }

        session()->put('carrito', $carrito);
        return redirect()->back()->with('success', 'Producto agregado al carrito.');
    }
    public function eliminar() {

    }
}
