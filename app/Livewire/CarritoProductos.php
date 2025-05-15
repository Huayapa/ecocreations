<?php

namespace App\Livewire;

use App\Models\Producto;
use Livewire\Component;

class CarritoProductos extends Component
{
    public array $productos = [];
    public float $subtotal = 0;
    public float $igv = 0.18;
    public float $total = 0;
    public float $impuesto = 0;
    protected $listeners = ['carritoActualizado' => 'cargarProductos'];

    public function mount()
    {
        $this->cargarProductos();
        $this->calcsubprecio();
        $this->calctotal();
    }

    public function cargarProductos()
    {
        $carrito = session('carrito', []);
        $this->productos = $carrito;
    }
    public function calcsubprecio()
    {
        $carrito = session('carrito', []);
        foreach ($carrito as $producto) { 
           $this->subtotal += $producto["subtotal"];
        }
    }

    public function calctotal() {
        if($this->subtotal > 0) {
            $this->impuesto =  $this->subtotal * $this->igv;
            $this->total = $this->impuesto + $this->subtotal;
        }
        
    }

    public function render()
    {
        return view('livewire.carrito-productos', [
            'productos' => $this->productos,
            'carrito' => [
                'subtotal' => $this->subtotal,
                'impuesto' => $this->impuesto,
                'total' => $this->total
            ]
        ]);
    }
}
