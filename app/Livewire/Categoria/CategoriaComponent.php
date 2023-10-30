<?php

namespace App\Livewire\Categoria;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Listagem de categorias')]
class CategoriaComponent extends Component
{
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.categoria.categoria-component');
    }
}
