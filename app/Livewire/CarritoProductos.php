<?php

namespace App\Livewire;

use App\Models\Producto;
use App\Services\CarritoService;
use Livewire\Component;

class CarritoProductos extends Component
{
    protected CarritoService $carritoService;
    protected $listeners = ['carritoActualizado' => 'cargarProductos'];
    public array $productos = [];
    public array $detalles = [];
    public function mount(CarritoService $carritoService){
        $this->carritoService = $carritoService; //instancia
        $this->cargarProductos();
    }
    public function cargarProductos()
    {
        $this->productos = $this->carritoService->obtenerProductos();
        $this->detalles = $this->carritoService->calcularTotales($this->productos);
    }
    public function render()
    {
        return view('livewire.carrito-productos', [
            'productos' => $this->productos,
            'carrito' => $this->detalles
        ]);
    }
}
