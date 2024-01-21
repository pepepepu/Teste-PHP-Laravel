<x-index name="Produtos - Adicionar">
    <x-styles.formsStyle />
    <form action="{{ route('products.store') }}" method="post" class="container-custom-1">
        @csrf
        <h1 class="text-title-custom">Adicionar produto</h1>
        <x-error />
        <div class="form-container-custom">
            <div class="form-custom-input">
                <div class="form-input-container">
                    <label for="CodBarras" class="form-label">
                        Código de Barras:
                    </label>
                    <input type="text" name="CodBarras" class="form-input">
                </div>
                <div class="form-input-container">
                    <label for="NomeProduto" class="form-label">
                        Nome do Produto:
                    </label>
                    <input type="text" name="NomeProduto" class="form-input">
                </div>
                <div class="form-input-container">
                    <label for="ValorUnitario" class="form-label">
                        Valor Unitário:
                    </label>
                    <input type="text" name="ValorUnitario" class="form-input">
                </div>
            </div>
            <div class="container-custom-buttons">
                <button type="submit" class="form-custom-buttons">
                    Adicionar
                </button>
                <a href="{{ route('products.index') }}" class="form-custom-buttons">
                    Cancelar
                </a>
            </div>
        </div>
    </form>
    <x-scripts.message />
</x-index>
