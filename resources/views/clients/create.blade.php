<x-index name="Clientes - Adicionar">
    <x-styles.formsStyle />
    <form action="{{ route('clients.store') }}" method="post" class="container-custom-1">
        @csrf
        <h1 class="text-title-custom">Adicionar cliente</h1>
        <x-error />
        <div class="form-container-custom">
            <div class="form-custom-input">
                <div class="form-input-container">
                    <label for="NomeCliente" class="form-label">
                        Nome:
                    </label>
                    <input type="text" name="NomeCliente" class="form-input">
                </div>
                <div class="form-input-container">
                    <label for="CPF" class="form-label">
                        CPF:
                    </label>
                    <input type="text" name="CPF" id="CPF" class="form-input">
                </div>
                <div class="form-input-container">
                    <label for="Email" class="form-label">
                        E-mail:
                    </label>
                    <input type="text" name="Email" class="form-input">
                </div>
            </div>
            <div class="container-custom-buttons">
                <button type="submit" class="form-custom-buttons">
                    Adicionar
                </button>
                <a href="{{ route('clients.index') }}" class="form-custom-buttons">
                    Cancelar
                </a>
            </div>
        </div>
    </form>
    <x-scripts.message />
</x-index>
