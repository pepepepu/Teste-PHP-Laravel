<div class="container-custom-table">
    <table class="custom-table ">
        <thead class="table-head-body-custom">
            <tr class="table-row-custom">
                <th scope="col" class="table-header-custom">Nome do Cliente</th>
                <th scope="col" class="table-header-custom">E-mail</th>
                <th scope="col" class="table-header-custom">CPF</th>
                <th scope="col" class="table-header-custom">Ações</th>
            </tr>
        </thead>
        <tbody class="table-head-body-custom">
            @foreach ($clients as $client)
                <tr class="table-row-custom">
                    <td class="table-data-custom">{{ $client->NomeCliente }}</td>
                    <td class="table-data-custom">{{ $client->Email }}</td>
                    <td class="table-data-custom">{{ $client->CPF }}</td>
                    <td class="table-data-custom">
                        <a href="{{ route('clients.edit', $client->id) }}" class="icon-custom ico-update" title="Editar">
                            <i class="material-icons ico">
                                edit
                            </i>
                        </a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="icon-custom ico-delete" title="Excluir">
                                <i class="material-icons ico">
                                    delete
                                </i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>