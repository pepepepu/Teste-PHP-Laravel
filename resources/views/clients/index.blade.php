<x-index name="Gestão - Clientes">
    <div class="container-custom-1">
        <h1 class="text-title-custom">Gestor de Compras</h1>
        @isset($mensagemSucesso)
            <div class="alert alert-success alert-custom"  id="mensagemSucesso">
                {{ $mensagemSucesso}}
            </div>
        @endisset
        <x-header :rota="route('clients.index')">
            <div class="container-custom-buttons">
                <a href="{{ route('clients.create') }}" id="adicionarBtn" class="custom-buttons-header add-header">
                    Adicionar
                </a>
                <button class="custom-buttons-header select-header" id="selecionarBtn">
                    Selecionar
                </button>
            </div>
        </x-header>    
        <x-clients.table :clients="$clients" />
    </div>
</x-index>
<x-scripts.message />


