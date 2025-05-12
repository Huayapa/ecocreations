<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class carritoCompras extends Component
{
    public int $cantidadcart;
    public function __construct()
    {
        $this->cantidadcart = count(session('carrito', ["1", "2"]));
    }

    public function render(): View|Closure|string
    {
        return view('components.carrito-compras', ['cantidadcart' => $this->cantidadcart]);
    }
}
