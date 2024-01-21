<x-index name="Pedidos - Exibir">
    <x-styles.purchaseShow />
    <div class="container-custom-1">
        <h1 class="text-title-custom">Detalhes do pedido nº: {{ $purchase->id }}</h1>
        <div class="show-container">
            <div class="show-info">
                <p class="show-label-title">Número do Pedido</p>
                <p class="show-text purchase-number">{{ $purchase->id }}</p>
            </div>
            <div class="show-info">
                <p class="show-label-title">Informações do Cliente</p>
                <div class="show-info-inner">
                    <div class="show-info-data">
                        <p class="show-label">Nome:</p>
                        <p class="show-text">{{ $purchase->cliente->NomeCliente }}</p>
                    </div>
                    <div class="show-info-data">
                        <p class="show-label">CPF:</p>
                        <p class="show-text">{{ $purchase->cliente->CPF }}</p>
                    </div>
                </div>
            </div>
            <div class="show-info">
                <p class="show-label-title">Informações do Produto</p>
                <div class="show-info-inner">
                    <div class="show-info-data">
                        <p class="show-label">Código de Barras:</p>
                        <p class="show-text">{{ $purchase->produto->CodBarras }}</p>
                    </div>
                    <div class="show-info-data">
                        <p class="show-label">Valor Unitário:</p>
                        <p class="show-text">
                            R$ {{ number_format($purchase->produto->ValorUnitario, 2, ',', '.') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="show-info">
                <p class="show-label-title">Informações da compra</p>
                <div class="show-info-inner">
                    <div class="show-info-data">
                        <p class="show-label">Quantidade:</p>
                        <p class="show-text">{{ $purchase->Quantidade }}</p>
                    </div>
                    <div class="show-info-data">
                        <p class="show-label">Desconto:</p>
                        <p class="show-text">{{ $purchase->Desconto }}%</p>
                    </div>
                    <div class="show-info-data">
                        <p class="show-label">Status:</p>
                        <p class="show-text">{{ $purchase->status }}</p>
                    </div>
                </div>
                <div class="show-info-inner">
                    <div class="show-info-data">
                        <p class="show-label">Valor Sem Desconto:</p>
                        <p class="show-text">
                            R$ {{ number_format($purchase->Quantidade * $purchase->produto->ValorUnitario, 2, ',', '.') }}
                        </p>
                    </div>
                    <div class="show-info-data">
                        <p class="show-label">Valor Com Desconto:</p>
                        <p class="show-text">
                            R$ {{ number_format(($purchase->Quantidade * $purchase->produto->ValorUnitario) - (($purchase->Quantidade * $purchase->produto->ValorUnitario) * ($purchase->Desconto / 100)), 2, ',', '.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="show-buttons">
            <a href="{{ route('purchases.edit', $purchase->id) }}" class="show-button show-edit">
                Editar
            </a>
            <a href="{{ route('purchases.index') }}" class="show-button show-back">
                Voltar
            </a>
        </div>
    </div>
</x-index>