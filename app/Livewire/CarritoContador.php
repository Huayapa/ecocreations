<?php

namespace App\Livewire;

use Livewire\Component;

class CarritoContador extends Component
{
    public $cantidadcart = 0;

    protected $listeners = ['carritoActualizado' => 'actualizarCantidad'];

    public function mount()
    {
        $this->actualizarCantidad();
    }

    public function actualizarCantidad()
    {
        $carrito = session('carrito', []);
        $this->cantidadcart = count($carrito);
    }

    public function render()
    {
        return view('livewire.carrito-contador');
    }
}
