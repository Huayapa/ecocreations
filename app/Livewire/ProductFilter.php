<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class ProductFilter extends Component
{
    use WithPagination;
    public $selectedCategories = [];
    public $sortOrder = 'newest'; //por defecto muestra del nuevo al viejo
    public $search = '';
    public $page = 1;
    protected $updatesQueryString = ['selectedCategories', 'sortOrder', 'page' , 'search'];
    //Metodo del livewire que se ejecuta antes  de que se actualize una propiedad
    public function updating($field){
        // Verificar si el cambio esta en el array, para volverte a la paginacion 1
        if (in_array($field, ['selectedCategories', 'sortOrder' , 'search'])) {
            $this->resetPage();
        }
    }
    public function render(){
        // dd($this->selectedCategories, $this->sortOrder);
        $query = Producto::query();
        if (!empty($this->selectedCategories)) {
            $query->whereIn('idCategoria', $this->selectedCategories);
        }
        // Filtrar por búsqueda
        if (!empty($this->search)) {
            $query->where('nombre', 'like', '%' . $this->search . '%');
        }
        switch ($this->sortOrder) {
            case 'oldest':
                $query->orderBy('fechaRegistro', 'asc');
                break;
            case 'price_asc':
                $query->orderBy('precio', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('precio', 'desc');
                break;
            default: // newest
                $query->orderBy('fechaRegistro', 'desc');
                break;
        }

        $productos = $query->paginate(12,  ['*'], 'page', $this->page);
        foreach ($productos as $producto) {
            $producto->imagen = base64_encode($producto->imagen);
        }
        $categorias = Categoria::all();
        $productosnew = Producto::orderBy('idProducto', 'desc')->take(3)->get();
        $productosnew = $this->convertImg($productosnew);
        return view('livewire.product-filter',  compact('productos', 'categorias', 'productosnew'));
    }
    public function convertImg($list) {
        return $list->map(function ($item) {
            if (!empty($item->imagen)) {
                $item->imagen = base64_encode($item->imagen);
            }
            return $item;
        });
    }
}
