<x-index name="Produtos - Editar">
    <x-styles.formsStyle />
    <form action="{{ route('products.update', $product->id) }}" method="post" class="container-custom-1">
        @csrf
        @method('PUT')
        <h1 class="text-title-custom">Editar produto</h1>
        <div class="form-container-custom">
            <div class="form-custom-input">
                <div class="form-input-container">
                    <label for="CodBarras" class="form-label">Código de Barras:</label>
                    <input type="text" name="CodBarras" class="form-input" value="{{ $product->CodBarras }}">
                </div>
                <div class="form-input-container">
                    <label for="NomeProduto" class="form-label">Nome do Produto:</label>
                    <input type="text" name="NomeProduto" class="form-input" value="{{ $product->NomeProduto }}">
                </div>
                <div class="form-input-container">
                    <label for="ValorUnitario" class="form-label">Valor Unitário:</label>
                    <input type="text" name="ValorUnitario" class="form-input" value="{{ $product->ValorUnitario }}">
                </div>
            </div>
            <div class="container-custom-buttons">
                <button type="submit" class="form-custom-buttons">Salvar</button>
                <a href="{{ route('clients.index') }}" class="form-custom-buttons">Cancelar</a>
            </div>
        </div>
    </form>
</x-index>
