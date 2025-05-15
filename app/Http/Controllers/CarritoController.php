<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class CarritoController extends Controller
{   
    public float $subtotal = 0;
    public float $igv = 0.18;
    public float $total = 0;
    public float $impuesto = 0;
    // Diriguirse a la pagina carrito
    public function viewCart() {
        $carrito = session()->get('carrito', []);
        foreach ($carrito as $producto) { 
           $this->subtotal += $producto["subtotal"];
        }
        $this->impuesto = $this->subtotal * $this->igv;
        
        return view('carrito', [
            'carrito' => $carrito,
            'detalles' => [
                'subtotal' => $this->subtotal,
                'impuesto' => $this->impuesto,
                'total' => $this->subtotal + $this->impuesto,
            ]
        ]);
    }
    //Diriguirse a la pagina de boleta
    public function viewBoleta() {
        $carrito = session()->get('carrito', []);
        foreach ($carrito as $producto) { 
           $this->subtotal += $producto["subtotal"];
        }
        $this->impuesto = $this->subtotal * $this->igv;
        
        return view('boleta', [
            'carrito' => $carrito,
            'detalles' => [
                'subtotal' => $this->subtotal,
                'impuesto' => $this->impuesto,
                'total' => $this->subtotal + $this->impuesto,
            ]
        ]);
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
            $carrito[$id]["subtotal"] = $carrito[$id]['stock'] * $carrito[$id]['precio'];
        } else {
            $carrito[$id] = [
                "idProducto" => $producto->idProducto,
                'nombre' => $producto->nombre,
                'descripcion' => $producto->descripcion,
                'precio' => $producto->precio,
                "stock" => 1,
                "imagen" => base64_encode($producto->imagen),
                "estado" => $producto->estado,
                "idCategoria" => $producto->idCategoria,
                "subtotal" => $producto->precio * 1
            ];
        }

        session()->put('carrito', $carrito);
        return redirect()->back()->with('success', 'Producto agregado al carrito.');
    }
    public function eliminar() {

    }
}
