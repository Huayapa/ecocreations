<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('productos', function () {
    return view('productos');
})->name('productos');

Route::get('carrito', function () {
    return view('carrito');
})->name('carrito');

Route::get('detalleproducto/{id}', [ProductoController::class, 'mostrar'])->name('detalleproducto');

