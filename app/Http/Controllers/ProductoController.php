<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function mostrar($id) {
        // Producto::find($id) ?? 
        $producto = Producto::find($id); //aqui devolvera una array con el producto
        if(!$producto) {
            session()->flash('error', 'Producto no encontrado.');
            return redirect("/");
        }
        if($producto->imagen) {
            $producto->imagen_base64 = base64_encode($producto->imagen);
        }
        return view("detalleproducto", compact("producto"));
    }
}
