<div class="container-custom-table">
    <table class="custom-table ">
        <thead class="table-head-body-custom">
            <tr class="table-row-custom">
                <th scope="col" class="table-header-custom">Código de Barras</th>
                <th scope="col" class="table-header-custom">Nome do Produto</th>
                <th scope="col" class="table-header-custom">Preço</th>
                <th scope="col" class="table-header-custom">Ações</th>
            </tr>
        </thead>
        <tbody class="table-head-body-custom">
            @foreach ($products as $product)
                <tr class="table-row-custom">
                    <td class="table-data-custom">{{ $product->CodBarras }}</td>
                    <td class="table-data-custom">{{ $product->NomeProduto }}</td>
                    <td class="table-data-custom">R$ {{ number_format($product->ValorUnitario, 2, ',', '.') }}</td>
                    <td class="table-data-custom">
                        <a href="{{ route('products.edit', $product->id) }}" class="icon-custom ico-update" title="Editar">
                            <i class="material-icons ico">
                                edit
                            </i>
                        </a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
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