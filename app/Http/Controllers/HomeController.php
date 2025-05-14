<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // LISTA DE PRODUCTOS
        $productos = Producto::orderBy('idProducto', 'desc')->take(3)->get();
        foreach ($productos as $producto) {
            // Convertir la imagen BLOB a Base64 (suponiendo que la columna sea 'imagen')
            if ($producto->imagen) {
                $producto->imagen_base64 = base64_encode($producto->imagen);
            }
        }
        // CATEGORIAS
        $categorias = Categoria::all();
        foreach ($categorias as $categoria) {
            // Convertir la imagen BLOB a Base64 (suponiendo que la columna sea 'imagen')
            if ($categoria->imagen) {
                $categoria->imagen_base64 = base64_encode($categoria->imagen);
            }
        }
        return view('inicio', compact('productos', "categorias"));
    }
}
