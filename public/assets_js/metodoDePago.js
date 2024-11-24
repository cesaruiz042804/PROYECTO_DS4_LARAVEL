const elementoAOcultar = document.querySelector('.header-a');
const elementoAOcultar2 = document.querySelector('.header__nav img');

//MenuHamburguesa
/*
menuBtn.addEventListener('click', () => {
  menu.classList.toggle('active'); 
  header.classList.toggle('transparent');
  elementoAOcultar.classList.toggle('oculto');
  elementoAOcultar2.classList.toggle('oculto');
  });
*/

const loading = document.querySelector('.main-container-loading');
const form = document.querySelector('.Main__ContenedorTarjeta');
const headers = document.querySelector('.header__nav');
const footer = document.querySelector('.Footer__Contenedor');
const body = document.body;

function displayLoading() {

  loading.style.display = 'block';
  form.style.display = 'none';
  headers.style.display = 'none';
  footer.style.display = 'none';
  body.style.backgroundImage = "linear-gradient(to left, #c49e9e, #D6E9FF)";
}

/*
function displayNoLoading(){
  loading.style.display = 'none';
  form.style.display = 'block';
  headers.style.display = 'block';
  footer.style.display = 'block';
  //body.style.backgroundImage = "linear-gradient(to left, #c49e9e, #D6E9FF)";
}
  */

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

