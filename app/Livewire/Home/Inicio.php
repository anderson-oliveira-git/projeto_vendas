<?php

namespace App\Livewire\Home;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]
class Inicio extends Component
{
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.home.inicio');
    }
}
