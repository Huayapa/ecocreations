<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Route;

// RUTA DE INICIO
Route::get('/', [HomeController::class, 'index'])->name('inicio');
// RUTA DE PRODUCTOS "TIENDA"
Route::get('productos', [TiendaController::class, 'index'])->name('productos');

//CONTACTO
Route::get("contacto", function () {
  return view("contacto");
})->name("contacto");
//NOSOTROS
Route::get("nosotros", function () {
  return view("nosotros");
})->name("nosotros");
// RUTA DE DETALLE DE PEDIDO
Route::get('detalleproducto/{id}', [ProductoController::class, 'mostrar'])->name('detalleproducto');

// !RUTA DE CARRITO
//IR A CARRITO
Route::get('carrito', [CarritoController::class, "viewCart"])->name('carrito');
//AGREGAR PRODUCTO A CARRITO
Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar');
//ELIMINAR PRODUCTO A CARRITO
Route::post('/carrito/eliminar', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');

// RUTA DE BOLETA DE COMPRAS
Route::get('boleta', [CarritoController::class, 'viewBoleta'])->name('boleta');
// !PEDIDOS
Route::post('/pedidos', [PedidoController::class, 'agregar'])->name('pedidos.agregar');
//login registro
Route::get("login", function () {
  return view("login");
})->name("login");

//!REGISTRO
Route::get('/register', [RegisterController::class, 'show'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');