<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('inicio');
// })->name('inicio');
// Va al controlador del Home y activa la funcion index
Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::get('productos', [TiendaController::class, 'index'])->name('productos');


Route::get('carrito', function () {
    return view('carrito');
})->name('carrito');

Route::get('boleta', function () {
    return view('boleta');
})->name('boleta');

Route::get('detalleproducto/{id}', [ProductoController::class, 'mostrar'])->name('detalleproducto');

