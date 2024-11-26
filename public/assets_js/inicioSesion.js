const btnContinue = document.getElementById("btnContinue");

// Agrega un evento 'click' al botón
btnContinue.addEventListener("click", function() {
    // Desactiva el botón
    btnContinue.disabled = true;

    // Opcional: Cambia el texto o estilo para indicar que está desactivado
    btnContinue.textContent = "cargando...";
    document.getElementById('ContenedorTarjeta-InfoTarjetas').submit();
});
