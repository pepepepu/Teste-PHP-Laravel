<x-index name="Pedidos - Editar">
    <x-styles.formsStyle />
    <form action="{{ route('purchases.update', $purchase->id) }}" method="post" class="container-custom-1">
        @csrf
        @method('PUT')
        <h1 class="text-title-custom">Editar pedido</h1>
        <div class="form-container-custom">
            <div class="form-custom-input">
                <div class="form-input-container">
                    <label for="Quantidade" class="form-label">Quantidade:</label>
                    <input type="text" name="Quantidade" class="form-input" value="{{ $purchase->Quantidade }}">
                </div>
                <div class="form-input-container">
                    <label for="Desconto" class="form-label">Desconto (%):</label>
                    <input type="text" name="Desconto" class="form-input" value="{{ $purchase->Desconto }}">
                </div>
                <div class="form-input-container">
                    <label for="status" class="form-label">Status:</label>
                    <select name="status" class="form-input">
                        <option value="Em Aberto" {{ $purchase->status == 'Em Aberto' ? 'selected' : '' }}>Em Aberto</option>
                        <option value="Pago" {{ $purchase->status == 'Pago' ? 'selected' : '' }}>Pago</option>
                        <option value="Cancelado" {{ $purchase->status == 'Cancelado' ? 'selected' : '' }}>Cancelado</option>
                    </select>
                </div>
            </div>
            <div class="container-custom-buttons">
                <button type="submit" class="form-custom-buttons">Salvar</button>
                <a href="{{ route('purchases.index') }}" class="form-custom-buttons">Cancelar</a>
            </div>
        </div>
    </form>
</x-index>
