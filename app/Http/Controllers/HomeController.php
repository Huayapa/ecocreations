<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $productos = $this->prepararConImagenBase64(
        Producto::orderByDesc('idProducto')->take(3)->get()
        );
        $categorias = $this->prepararConImagenBase64(
            Categoria::all()
        );
        return view('inicio', compact('productos', 'categorias'));
    }

    private function prepararConImagenBase64($coleccion){
        return $coleccion->map(function ($item) {
            if ($item->imagen) {
                $item->imagen = base64_encode($item->imagen);
            }
            return $item;
        });
    }
}
