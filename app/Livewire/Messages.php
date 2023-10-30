<?php declare(strict_types = 1);

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Messages extends Component
{
    #[On('msg')]
    public function msg(string $msg): void
    {
        session()->flash('msg', $msg);
    }

    public function render()
    {
        return view('livewire.messages');
    }
}
