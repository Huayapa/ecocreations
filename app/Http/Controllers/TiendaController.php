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
        // TODOS LAS CATEGORIAS DISPONIBLES
        $categorias = Categoria::all();
        $categorias = $this->convertImg($categorias);
        return view('productos', compact("categorias"));
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
