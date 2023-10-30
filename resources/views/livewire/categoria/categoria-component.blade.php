<div>
    <x-card title="Categorias ({{ $this->categorias->count() }})">
        <x-slot:tools>
            <a href="#" type="button" class="btn btn-primary"
            data-toggle="modal" data-target="#criarCategoria">
                Criar categoria
            </a>
        </x-slot:tools>

        <x-table>
            <x-slot:thead>
                <th style="width: 42.5%;">ID</th>
                <th style="width: 42.5%;">NOME</th>
                <th style="width: 5%;"></th>
                <th style="width: 5%;"></th>
                <th style="width: 5%;"></th>
            </x-slot:thead>

            <x-slot:tbody>
                @forelse ($this->categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nome }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm btn-icon">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-success btn-sm btn-icon">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm btn-icon">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr class="text-center">
                        <td colspan="5">
                            <span class="text-warning">Não existem categorias cadastradas!</span>
                        </td>
                    </tr>
                @endforelse
            </x-slot:tbody>
        </x-table>

        <x-slot:footer>
            <div class="float-right">
                {{ $this->categorias->links() }}
            </div>
        </x-slot:footer>
    </x-card>

    <x-modal modalTitle="Criar categoria" modalId="criarCategoria" modalSize="modal-lg">
        <form wire:submit="submit">
            <div class="row mb-2">
                <div class="col">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" class="form-control" placeholder="Nome categoria" wire:model="nome">
                    @error('nome')
                        <div class="alert alert-danger w-100 mt-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-end" style="gap: 1rem;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar categoria</button>
            </div>
        </form>
    </x-modal>
</div>
