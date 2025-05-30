<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TiendaController;
use App\Http\Middleware\EsAdministrador;
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
Route::post('/pedidos/actualizar', [PedidoController::class, 'actualizarEstado'])->name('pedido.actualizar');

//!REGISTRO
Route::get('/register', [RegisterController::class, 'show'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');


//!LOGIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//!DASHBOARD
Route::middleware(['auth', EsAdministrador::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.inicio');
});


//!GMAIL

use App\Http\Controllers\CorreoController;

Route::post('/enviar-correo', [CorreoController::class, 'enviar'])->name('enviar.correo');

use Illuminate\Support\Facades\Mail;

Route::get('/probar-correo', function () {
    Mail::raw('¡Este es un correo de prueba!', function ($message) {
        $message->to('gianfrancohj2@gmail.com')
                ->subject('Prueba directa de correo');
    });

    return 'Correo enviado.';
});

