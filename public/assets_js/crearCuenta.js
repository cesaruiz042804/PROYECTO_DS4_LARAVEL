// Selecciona el botón
const btnRegister = document.getElementById("btnRegister");

// Agrega un evento 'click' al botón
btnRegister.addEventListener("click", function() {

    // Desactiva el botón
    btnRegister.disabled = true;

    // Opcional: Cambia el texto o estilo para indicar que está desactivado
    btnRegister.textContent = "Procesando...";
    document.getElementById('ContenedorTarjeta-InfoTarjetas').submit();
});
