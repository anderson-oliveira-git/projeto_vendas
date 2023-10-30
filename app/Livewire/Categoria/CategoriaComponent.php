<?php declare(strict_types = 1);

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Listagem de categorias')]
class CategoriaComponent extends Component
{
    # propriedades da classe ::
    public int $totalRegistros = 0;

    # propriedades do model ::
    public string $nome = '';

    public function mount()
    {
        $this->totalRegistros = Categoria::count();
    }

    public function rules()
    {
        return [
            'nome' => 'required|min:5|max:30|unique:categorias'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome da categoria é obrigatório.',
            'nome.min'      => 'O nome da categoria não pode ter menos de 5 caracteres.',
            'nome.max'      => 'O nome da categoria não pode ter mais de 30 caracteres.',
            'nome.unique'   => 'O nome da categoria já existe.'
        ];
    }

    public function submit()
    {
        $this->validate();

        $categoria = new Categoria();
        $categoria->nome = $this->nome;
        $categoria->save();

        $this->dispatch('closeModal', 'criarCategoria');

    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.categoria.categoria-component', ['categorias' => Categoria::all()]);
    }
}
