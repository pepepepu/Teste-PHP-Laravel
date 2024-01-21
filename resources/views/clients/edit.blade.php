<x-index name="Clientes - Editar">
    <x-styles.formsStyle />
    <form action="{{ route('clients.update', $client->id) }}" method="post" class="container-custom-1">
        @csrf
        @method('PUT')
        <h1 class="text-title-custom">Editar cliente</h1>
        <div class="form-container-custom">
            <div class="form-custom-input">
                <div class="form-input-container">
                    <label for="NomeCliente" class="form-label">Nome:</label>
                    <input type="text" name="NomeCliente" class="form-input" value="{{ $client->NomeCliente }}">
                </div>
                <div class="form-input-container">
                    <label for="CPF" class="form-label">CPF:</label>
                    <input type="text" name="CPF" class="form-input" value="{{ $client->CPF }}">
                </div>
                <div class="form-input-container">
                    <label for="Email" class="form-label">E-mail:</label>
                    <input type="text" name="Email" class="form-input" value="{{ $client->Email }}">
                </div>
            </div>
            <div class="container-custom-buttons">
                <button type="submit" class="form-custom-buttons">Salvar</button>
                <a href="{{ route('clients.index') }}" class="form-custom-buttons">Cancelar</a>
            </div>
        </div>
    </form>
</x-index>
