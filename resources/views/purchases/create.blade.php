<x-index name="Pedidos - Adicionar">
    <x-styles.formsStyle />
    <form action="{{ route('purchases.store') }}" method="post" class="container-custom-1">
        @csrf
        <h1 class="text-title-custom">Adicionar pedido</h1>
        <x-error />
        <div class="form-container-custom">
            <div class="form-custom-input">
                <div class="form-input-container">
                    <label for="cliente_id" class="form-label">
                        Nome do Cliente:
                    </label>
                    <input type="text" name="cliente_id" class="form-input">
                </div>
                <div class="form-input-container">
                    <label for="produto_id" class="form-label">
                        Código do Produto:
                    </label>
                    <input type="text" name="produto_id" class="form-input">
                </div>
                <div class="form-input-container double-items">
                    <div class="form-input-double">
                        <label for="Quantidade" class="form-label">
                            Quantidade:
                        </label>
                        <input type="text" name="Quantidade" class="form-input">
                    </div>
                    <div class="form-input-double">
                        <label for="Desconto" class="form-label">
                            Desconto (%):
                        </label>
                        <input type="text" name="Desconto" class="form-input">
                    </div>
                </div>
                <div class="form-input-container">
                    <label for="status" class="form-label">
                        Status da Compra:
                    </label>
                    <select name="status" class="form-input">
                        <option value="Em Aberto">Em Aberto</option>
                        <option value="Pago">Pago</option>
                        <option value="Cancelado">Cancelado</option>
                    </select>
                </div>
            </div>
            <div class="container-custom-buttons">
                <button type="submit" class="form-custom-buttons">
                    Adicionar
                </button>
                <a href="{{ route('purchases.index') }}" class="form-custom-buttons">
                    Cancelar
                </a>
            </div>
        </div>
    </form>
    <x-scripts.message />
</x-index>
