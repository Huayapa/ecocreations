<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CarritoBoton extends Component
{
    public int $cantidadcart;
    public function __construct()
    {
        $this->cantidadcart = session('carrito') ? count(session('carrito')) : 0;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carrito-boton');
    }
}
