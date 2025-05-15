<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CarritoBoton extends Component
{
    public function render(): View|Closure|string
    {
        return view('components.carrito-boton');
    }
}
