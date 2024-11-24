const elementoAOcultar = document.querySelector('.header-a');
const elementoAOcultar2 = document.querySelector('.header__nav img');

const loading = document.querySelector('.main-container-loading');
const form = document.querySelector('.Main__ContenedorTarjeta');
const headers = document.querySelector('.container-header');
const footer = document.querySelector('.max-container-footer');
const body = document.body;

function displayLoading() {
  loading.style.display = 'block';
  form.style.display = 'none';
  headers.style.display = 'none';
  footer.style.display = 'none';
  body.style.backgroundImage = "linear-gradient(to left, #c49e9e, #D6E9FF)";


}

function alertMessage(message) {
  Swal.fire({
    icon: 'warning',
    title: 'Warning!',
    html: message,
    showConfirmButton: true,
    timer: 3000
  }).then(() => {

  });
}

