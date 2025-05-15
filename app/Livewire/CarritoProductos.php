<?php

namespace App\Livewire;

use App\Models\Producto;
use Livewire\Component;

class CarritoProductos extends Component
{
    public array $productos = [];
    public float $total = 0;
    protected $listeners = ['carritoActualizado' => 'cargarProductos'];

    public function mount()
    {
        $this->cargarProductos();
        $this->calctotalprecio();
    }

    public function cargarProductos()
    {
        $carrito = session('carrito', []);
        $this->productos = $carrito;
    }
    public function calctotalprecio()
    {
        $carrito = session('carrito', []);
        foreach ($carrito as $producto) { 
           $this->total += $producto["stock"] * $producto["precio"];
        }
    }

    

    public function render()
    {
        return view('livewire.carrito-productos', [
            'productos' => $this->productos,
            'totalprecio' => $this->total
        ]);
    }
}
