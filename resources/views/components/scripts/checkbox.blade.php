<script>
    document.addEventListener("DOMContentLoaded", function () {
        var deletarBtn = document.getElementById("deletarBtn");
        var selecionarBtn = document.getElementById("selecionarBtn");
        var adicionarBtn = document.getElementById("adicionarBtn");
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var botoesEditarExcluir = document.querySelectorAll('.icon-custom');

        var checkboxesVisiveis = false;
        deletarBtn.style.display = "none";

        selecionarBtn.addEventListener("click", function () {
            checkboxesVisiveis = !checkboxesVisiveis;

            selecionarBtn.textContent = checkboxesVisiveis ? "Cancelar" : "Selecionar";
            selecionarBtn.style.backgroundColor = checkboxesVisiveis ? "#d1d1d1" : "#cfc53b";

            adicionarBtn.style.display = checkboxesVisiveis ? "none" : "flex";
            deletarBtn.style.display = checkboxesVisiveis ? "flex" : "none";

            checkboxes.forEach(function (checkbox) {
                checkbox.style.display = checkboxesVisiveis ? "flex" : "none";
            });

            botoesEditarExcluir.forEach(function (botao) {
                botao.style.display = checkboxesVisiveis ? "none" : "flex";
            });
        });

        checkboxes.forEach(function (checkbox) {
            checkbox.style.display = "none";
        });

        botoesEditarExcluir.forEach(function (botao) {
            botao.style.display = "flex";
        });
    });
</script>