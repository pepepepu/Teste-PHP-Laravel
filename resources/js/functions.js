function formatarCPF(campo) {
    // Remove caracteres não numéricos
    const cpfSemFormato = campo.value.replace(/\D/g, '');

    // Limita a 11 dígitos
    const cpfLimitado = cpfSemFormato.slice(0, 11);

    // Aplica a máscara
    const cpfFormatado = cpfLimitado.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');

    // Atualiza o valor do campo
    campo.value = cpfFormatado;
}