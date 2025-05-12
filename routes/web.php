<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});
Route::get('productos', function () {
    return view('productos');
});

Route::get('detalleproducto/{id}', [ProductoController::class, 'mostrar'])->name('detalleproducto');

