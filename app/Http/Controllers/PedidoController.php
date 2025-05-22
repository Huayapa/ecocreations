<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Direccion;
use App\Models\Envio;
use App\Models\Pais;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\Venta;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    public function agregar(Request $request){
        // Validación
        $request->validate([
            'pais' => 'required|int',
            'calle' => 'required|string|max:255',
            'ciudad' => 'required|string|max:100',
            'codigopostal' => 'required|string|max:10',
        ]);
        // Verificar si el usuario está logueado
        if (!Auth::check()) {
            return redirect()->back()->with('boletaerror', 'Por favor, inicia sesión para continuar.');
        }
        // Verificar que exista productos en el carrito
        $carrito = session('carrito');
        if (!$carrito || count($carrito) === 0) {
        return redirect()->back()->with('boletaerror', 'Tu carrito está vacío. Agrega productos antes de continuar.');
        }
        //Validad que existan datos del cliente
        $usuario = Auth::user();
        $cliente = $usuario->cliente;
        if (!$cliente) {
            return redirect()->back()->with('boletaerror', 'No se encontró información del cliente.');
        }
        try {
            DB::transaction(function () use ($carrito, $cliente, $request) {
                $totalPrecio = 0;
                $totalCantidad = 0;
                //Hacer calculos del total de precio y de la cantidad
                foreach ($carrito as $item) {
                    $totalPrecio += $item['precio'] * $item['stock'];
                    $totalCantidad += $item['stock'];
                }
                // Enviar datos del pedido
                $pedido = Pedido::create([
                    'fechaPedido' => now(),
                    'totalPrecio' => $totalPrecio,
                    'totalCantidad' => $totalCantidad,
                    'estado' => 'pendiente',
                    'idCliente' => $cliente->idCliente,
                ]);
                //Generar los productos que tienen el pedido
                foreach ($carrito as $item) {
                    $pedido->detalles()->create([
                        'idProducto' => $item['idProducto'],
                        'cantidad' => $item['stock'],
                        'precioUnidad' => $item['precio'],
                        'subtotal' => $item['stock'] * $item['precio'],
                    ]);
                }
                //Calcular los impuestos
                $igv = $totalPrecio * 0.18;
                $totalConIgv = $totalPrecio + $igv;

                //Crear la venta
                $venta = Venta::create([
                    'idPedido' => $pedido->idPedido,
                    'metodoPago' => $request->metodoPago ?? 'Transferencia',
                    'estadoPago' => 'pendiente',
                    'fechaPago' => now(),
                    'igv' => $igv,
                    'total' => $totalConIgv,
                ]);
                // dd($venta);

                //Crear direccion
                $direccion = Direccion::create([
                'calle' => $request->calle,
                'ciudad' => $request->ciudad,
                'codigoPostal' => $request->codigopostal,
                'idPais' => $request->pais
                ]);
                //Crear envio
                Envio::create([
                    'metodoEnvio' => $request->metodoEnvio ?? 'Delivery',
                    'estadoEnvio' => 'Pendiente',
                    'motivoCancelacion' => null,
                    'idVenta' => $venta->idVenta,
                    'idDireccion' => $direccion->idDireccion,
                ]);
                // Hacer descuento de stock
                $producto = Producto::find($item['idProducto']);
                if ($producto) {
                    $producto->stock -= $item['stock'];
                    // Validar que el stock no sea negativo
                    if ($producto->stock < 0) {
                        throw new Exception("No hay suficiente stock del producto: " . $producto->nombre);
                    }
                    $producto->save();
                }
            });

            session()->forget('carrito');
            // FUNCIONES LUEGO DE VALIDACION
            return redirect()->back()->with('boletasuccess', 'Pedido registrado correctamente.');
        } catch (Exception $e) {
            return redirect()->back()->with('boletaerror', 'El pedido no se pudo registrar.'. $e);
        }
    }
}
