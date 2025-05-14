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
        $productos = Producto::orderBy('idProducto', 'desc')->take(15)->get();
        $productos = $this->convertImg($productos);
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
                $item->imagen_base64 = base64_encode($item->imagen);
            }
            return $item;
        });
    }
}
