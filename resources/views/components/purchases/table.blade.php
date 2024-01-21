<x-styles.purchaseTable />
<div class="container-custom-table">
    <table class="custom-table ">
        <thead class="table-head-body-custom">
            <tr class="table-row-custom">
                <th scope="col" class="table-header-custom">Nome do Cliente</th>
                <th scope="col" class="table-header-custom">Nome do Produto</th>
                <th scope="col" class="table-header-custom">Quantidade</th>
                <th scope="col" class="table-header-custom">Status</th>
                <th scope="col" class="table-header-custom">Ações</th>
            </tr>
        </thead>
        <tbody class="table-head-body-custom">
            @foreach ($purchases as $purchase)
                <tr class="table-row-custom">
                    <td class="table-data-custom">{{ $purchase->cliente->NomeCliente }}</td>
                    <td class="table-data-custom">{{ $purchase->produto->NomeProduto }}</td>
                    <td class="table-data-custom">{{ $purchase->Quantidade }}</td>
                    <td class="table-data-custom">
                        @if ($purchase->status == 'Cancelado')
                            <span class="badge bg-danger">{{ $purchase->status }}</span>
                        @elseif ($purchase->status == 'Pago')
                            <span class="badge bg-success">{{ $purchase->status }}</span>
                        @elseif ($purchase->status == 'Em Aberto')
                            <span class="badge bg-warning text-dark">{{ $purchase->status }}</span>
                        @else
                            
                        @endif
                    </td>
                    <td class="table-data-custom">
                        <a href="{{ route('purchases.edit', $purchase->id) }}" class="icon-custom ico-update" title="Editar">
                            <i class="material-icons ico">
                                edit
                            </i>
                        </a>
                        <form  action="{{ route('purchases.destroy', $purchase->id) }}"  method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="icon-custom ico-delete" title="Excluir">
                                <i class="material-icons ico">
                                    delete
                                </i>
                            </button>
                        </form>
                        <a href="{{ route('purchases.show', $purchase->id) }}" class="icon-custom ico-view" title="Visualizar">
                            <i class="material-icons ico">
                                visibility
                            </i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>