const menuBtn = document.getElementById('MenuHamburguesa');
const menu = document.querySelector('.Header__NavegadorSecundario');
const header = document.querySelector('header');
const img = document.getElementById('ImgLogo');

menuBtn.addEventListener('click', () => {
   menu.classList.toggle('active');
   img.classList.toggle('quitar');
});

const openModalBtn = document.getElementById('openModal');
const openModalMovilBtn = document.getElementById('openModal-movil');
const closeModalBtn = document.getElementById('closeModal');
const modalOverlay = document.getElementById('modalOverlay');

// Abrir modal
openModalBtn.addEventListener('click', () => {
   console.log('Movil');
   modalOverlay.classList.add('active');
});

// Cerrar modal
closeModalBtn.addEventListener('click', () => {
   console.log('Movil');
   modalOverlay.classList.remove('active');
});

// Cerrar modal al hacer clic fuera de él
modalOverlay.addEventListener('click', (e) => {
   if (e.target === modalOverlay) {
      modalOverlay.classList.remove('active');
   }
});

// modal movil

openModalMovilBtn.addEventListener('click', () => {
   console.log('Movil');
   modalOverlay.classList.add('active');
});

