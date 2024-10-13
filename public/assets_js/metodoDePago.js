const menuBtn = document.getElementById('MenuHamburguesa');
const menu = document.querySelector('.Header__NavegadorSecundario');
const header = document.querySelector('header');
const img = document.getElementById('ImgLogo');

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
const footer = document.querySelector('.footer-footer');
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
    title: 'warning!',
    html: message,
    showConfirmButton: true,
    timer: 3000
  }).then(() => {

  });
}

async function validarEmailZeroBounce(email) {
  const apiKey = 'NSC45G0UE4YNv36cON5SXwnE68Qc78uvUkv6PZh3';
  const apiUrl = 'https://api.bouncer.com/v1/emails';

  try {
    const response = await axios.post(apiUrl, {
      api_key: apiKey,
      email: email
    });

    if (response.status === 200) {
      const data = response.data;
      if (data.status === 'valid') {
        console.log('El correo es válido');
      } else {
        alertMessage('El correo es inválido');
        console.log('El correo es inválido');
      }
    } else {
      console.error('Error en la respuesta de la API:', response.status, response.statusText);
    }
  } catch (error) {
    if (error.response) {
      // El servidor respondió con un código de estado fuera del rango 2xx
      console.error('Error en la respuesta de la API:', error.response.status, error.response.data);
    } else if (error.request) {
      // La solicitud fue hecha pero no se recibió respuesta
      console.error('No se recibió respuesta del servidor:', error.request);
    } else {
      // Algo sucedió al configurar la solicitud que provocó un error
      console.error('Error al configurar la solicitud:', error.message);
    }
  }
}
