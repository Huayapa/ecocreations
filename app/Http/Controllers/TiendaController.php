<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class TiendaController extends Controller
{
    public function index() {
        // TODOS LOS PRODUCTOS NUEVOS
        $productos = Producto::orderBy('idProducto', 'desc')->paginate(15);
        foreach ($productos as $producto) {
            $producto->imagen = base64_encode($producto->imagen);
        }
        // TODOS LAS CATEGORIAS DISPONIBLES
        $categorias = Categoria::all();
        $categorias = $this->convertImg($categorias);
        // ! SOLO 3 PRODUCTOS NUEVOS
        $productosnew = Producto::orderBy('idProducto', 'desc')->take(3)->get();
        $productosnew = $this->convertImg($productosnew);


        return view('productos', compact(
            'productosnew',
            'productos',
            'categorias',
        ));
    }

    public function convertImg($list) {
        return $list->map(function ($item) {
            if (!empty($item->imagen)) {
                $item->imagen = base64_encode($item->imagen);
            }
            return $item;
        });
    }
}
