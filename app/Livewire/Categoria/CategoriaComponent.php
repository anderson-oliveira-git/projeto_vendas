<?php declare(strict_types = 1);

namespace App\Livewire\Categoria;

use App\Models\Categoria;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Listagem de categorias')]
class CategoriaComponent extends Component
{
    use WithPagination;

    # propriedades da classe ::
    public int $totalRegistros = 0;
    public string $buscar = '';

    # propriedades do model ::
    public string $nome = '';

    public function rules()
    {
        return [
            'nome' => [
                'required',
                'min:5',
                'max:30',
                'unique:categorias'
            ]
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

    #[Computed]
    public function categorias()
    {
        if ($this->buscar != '') {
            $this->resetPage();
        }

        return Categoria::where('nome', 'like', "%{$this->buscar}%")
            ->orderBy('id', 'desc')
            ->paginate(5);
    }

    public function submit()
    {
        $this->validate();

        $categoria = new Categoria();
        $categoria->nome = $this->nome;
        $categoria->save();

        $this->dispatch('closeModal', 'criarCategoria');
        $this->dispatch('msg', "Categoria {$categoria->nome} cadastrada com sucesso.");

        $this->reset();
    }

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.categoria.categoria-component');
    }
}
