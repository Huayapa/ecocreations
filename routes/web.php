<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Route;

// RUTA DE INICIO
Route::get('/', [HomeController::class, 'index'])->name('inicio');
// RUTA DE PRODUCTOS "TIENDA"
Route::get('productos', [TiendaController::class, 'index'])->name('productos');

// RUTA DE BOLETA DE COMPRAS
Route::get('boleta', function () {
    return view('boleta');
})->name('boleta');
// RUTA DE DETALLE DE PEDIDO
Route::get('detalleproducto/{id}', [ProductoController::class, 'mostrar'])->name('detalleproducto');

// !RUTA DE CARRITO
//IR A CARRITO
Route::get('carrito', [CarritoController::class, "view"])->name('carrito');

//MOSTRAR CARRITO
Route::get('/carrito/mostrar', [CarritoController::class, 'mostrar'])->name('carrito.mostrar');
//AGREGAR PRODUCTO A CARRITO
Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
//ELIMINAR PRODUCTO A CARRITO
Route::post('/carrito/eliminar', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');