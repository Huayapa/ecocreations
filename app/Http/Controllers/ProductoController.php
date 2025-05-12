<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function mostrar($id) {
        // Producto::find($id) ?? 
        $producto = (object) [
            'id' => 1,
            'nombre' => 'Cepillo de bambú',
            'descripcion' => 'Cuida tu sonrisa y el planeta con nuestro cepillo de dientes de bambú 100% biodegradable. Fabricado con mango de bambú natural, resistente al agua y antibacteriano, es una alternativa sostenible y libre de plástico. Sus cerdas suaves (o medianas, si aplica) están diseñadas para limpiar eficazmente sin dañar el esmalte ni las encías. Ideal para quienes buscan un estilo de vida más consciente y responsable con el medio ambiente.',
            'precio' => 0.00
        ]; //aqui devolvera una array con el producto
        if($id != $producto->id) {
            return redirect("/")->with('error', 'Producto no encontrado.');
        }

        return view("detalleproducto", compact("producto"));
    }
}
