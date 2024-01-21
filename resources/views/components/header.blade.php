<div class="container-custom-2">
    <select id="categorias" name="categorias" class="select-custom-categories" onchange="updateSelectOptionsAndRedirect()">
        <option value="clients" class="select-custom-options">Clientes</option>
        <option value="products" class="select-custom-options">Produtos</option>
        <option value="purchases" class="select-custom-options">Pedidos</option>
    </select>
    <div class="container-custom-select">
        <form method="GET" action="{{ $rota }}" id="filter-form" class="filter-form">
            <label for="select-filter" class="label-custom">
                Filtros:
            </label>
            <select id="select-filter" name="select-filter" class="select-custom">
            </select>
            <label for="option-direction-asc" class="label-custom label-radio">
                Asc:
                <input type="radio" id="option-direction-asc" name="direction" value="asc"> 
            </label>
            
            <label for="option-direction-desc" class="label-custom label-radio">
                Desc:
                <input type="radio" id="option-direction-desc" name="direction" value="desc"> 
            </label>
            <button class="filter-button"  onclick="submitForm()">
                Filtrar
            </button>
        </form>           
    </div>
    {{ $slot }}
</div>
<x-scripts.header />