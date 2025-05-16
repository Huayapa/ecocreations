<?php

namespace App\Services;

use App\Models\Producto;

class CarritoService
{
    // LOGICA DEL CARRITO
    protected float $igv = 0.18;
    public function obtenerProductos(): array {
        return session()->get('carrito', []);
    }
    public function calcularTotales(array $carrito): array {
        $subtotal = array_sum(array_column($carrito, 'subtotal')); //suma de todos los productos
        $impuesto = $subtotal * $this->igv;
        return [
            'subtotal' => $subtotal,
            'impuesto' => $impuesto,
            'total' => $subtotal + $impuesto,
        ];
    }
    public function agregarProducto(int $idProducto, ?int $cantidadprod = 0): bool {
        $producto = Producto::find($idProducto);
        if (!$producto) return false;

        $carrito = session()->get('carrito', []);
        $cantidadEnCarrito = $carrito[$idProducto]['stock'] ?? 0;

        $cantidadNueva = ($cantidadprod !== null && $cantidadprod > 0) ? $cantidadprod : 1;
        $cantidadTotal = $cantidadEnCarrito + $cantidadNueva;

        // Validar contra el stock real del producto
        if ($cantidadTotal > $producto->stock) {
            return false; 
        }
        if (isset($carrito[$idProducto])) {
            $carrito[$idProducto]['stock'] += $cantidadprod;
            $carrito[$idProducto]['subtotal'] = $carrito[$idProducto]['stock'] * $carrito[$idProducto]['precio'];
        } else {
            $carrito[$idProducto] = [
                'idProducto' => $producto->idProducto,
                'nombre' => $producto->nombre,
                'descripcion' => $producto->descripcion,
                'precio' => $producto->precio,
                'stock' => $cantidadNueva,
                'imagen' => base64_encode($producto->imagen),
                'estado' => $producto->estado,
                'idCategoria' => $producto->idCategoria,
                'subtotal' => $producto->precio,
            ];
        }
        session()->put('carrito', $carrito);
        return true;
    }
    public function eliminarProducto(int $idProducto): bool{
        $carrito = session()->get('carrito', []);
        if (isset($carrito[$idProducto])) {
            unset($carrito[$idProducto]);
            session()->put('carrito', $carrito);
            return true;
        }

        return false;
    }

}
