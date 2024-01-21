<script>
    document.addEventListener("DOMContentLoaded", function () {
        var categoriasSelect = document.getElementById("categorias");

        var categoriaSelecionada = localStorage.getItem("categoriaSelecionada");

        if (categoriaSelecionada) {
            categoriasSelect.value = categoriaSelecionada;
        }

        updateSelectOptions();
    });

    function updateSelectOptionsAndRedirect() {
        updateSelectOptions();

        setTimeout(function () {
            var categoriasSelect = document.getElementById("categorias");
            switch (categoriasSelect.value) {
                case "clients":
                    window.location.href = '/clients';
                    break;
                case "products":
                    window.location.href = '/products';
                    break;
                case "purchases":
                    window.location.href = '/purchases';
                    break;
            }
        }, 100);
    }

    function updateSelectOptions() {
        var categoriasSelect = document.getElementById("categorias");
        var selectOptions = document.getElementById("select-filter");

        selectOptions.innerHTML = "";

        switch (categoriasSelect.value) {
            case "clients":
                addOption(selectOptions, "Nome");
                addOption(selectOptions, "E-mail");
                addOption(selectOptions, "CPF");
                break;
            case "products":
                addOption(selectOptions, "Código de barras");
                addOption(selectOptions, "Nome do Produto");
                addOption(selectOptions, "Valor");
                break;
            case "purchases":
                addOption(selectOptions, "Nome do cliente");
                addOption(selectOptions, "Nome do produto");
                addOption(selectOptions, "Quantidade");
                break;
        }

        localStorage.setItem("categoriaSelecionada", categoriasSelect.value);
    }

    function addOption(select, value) {
        var option = document.createElement("option");
        option.text = value;
        switch (option.text) {
            case "Nome":
                option.value = "NomeCliente";
                break;
            case "E-mail":
                option.value = "Email";
                break;
            case "CPF":
                option.value = "CPF";
                break;
            case "Código de barras":
                option.value = "CodBarras";
                break;
            case "Nome do Produto":
                option.value = "NomeProduto";
                break;
            case "Valor":
                option.value = "ValorUnitario";
                break;
            case "Nome do cliente":
                option.value = "cliente_id";
                break;
            case "Nome do produto":
                option.value = "produto_id";
                break;
            case "Quantidade":
                option.value = "Quantidade";
                break;
        }
        select.add(option);
    }

    document.addEventListener("DOMContentLoaded", function() {
        function markSelectedOptions() {
            var selectedFilter = "{{ request('select-filter') }}";
            var selectedDirection = "{{ request('direction') }}";

            document.getElementById('select-filter').value = selectedFilter;

            if (selectedDirection === 'asc') {
                document.getElementById('option-direction-asc').checked = true;
            } else if (selectedDirection === 'desc') {
                document.getElementById('option-direction-desc').checked = true;
            }
        }

        markSelectedOptions();
    });

    function submitForm() {
        document.getElementById('filter-form').submit();
    }
</script>
