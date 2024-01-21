<script>
    document.addEventListener("DOMContentLoaded", function() {
    var mensagemSucesso = document.getElementById("mensagemSucesso");

    if (mensagemSucesso) {
        setTimeout(function() {
            mensagemSucesso.style.display = "none";
        }, 3000);

        mensagemSucesso.addEventListener("click", function() {
            mensagemSucesso.style.display = "none";
        });
    }
});
</script>