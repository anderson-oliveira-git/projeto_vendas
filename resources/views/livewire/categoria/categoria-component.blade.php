<div>
    <x-card>
        <x-slot:tools>
            <a href="" class="btn btn-primary">Criar categoria</a>
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
                <tr>
                    <td>teste</td>
                    <td>teste</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm btn-icon">
                            <i class="fa fa-eye"></i>
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-success btn-sm btn-icon">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-danger btn-sm btn-icon">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </x-slot:tbody>
        </x-table>
    </x-card>
</div>
