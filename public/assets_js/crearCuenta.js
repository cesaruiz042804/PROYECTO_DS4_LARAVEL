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

// Mascara para el input de phone
document.addEventListener('DOMContentLoaded', function () {
    var phoneInput = document.getElementById('numerotelefono');
    var mask = IMask(phoneInput, {
      mask: '0000-0000'  // Definiendo la máscara
    });
  });
  