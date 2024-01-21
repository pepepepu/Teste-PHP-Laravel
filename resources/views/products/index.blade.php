<x-index name="Gestão - Produtos">
    <div class="container-custom-1">
        <h1 class="text-title-custom">Gestor de Compras</h1>
        @isset($mensagemSucesso)
            <div class="alert alert-success alert-custom"  id="mensagemSucesso">
                {{ $mensagemSucesso}}
            </div>
        @endisset
        <x-header :rota="route('products.index')">
            <div class="container-custom-buttons">
                <a href="{{ route('products.create') }}" id="adicionarBtn" class="custom-buttons-header add-header">
                    Adicionar
                </a>
                <button class="custom-buttons-header select-header" id="selecionarBtn">
                    Selecionar
                </button>
            </div>
        </x-header>
        <x-products.table :products="$products" />
    </div>
</x-index>
<x-scripts.message />