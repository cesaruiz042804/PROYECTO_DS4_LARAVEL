const menuBtn = document.getElementById('MenuHamburguesa');
const menu = document.querySelector('.Header__NavegadorSecundario');
const header = document.querySelector('header');
const img = document.getElementById('ImgLogo');

menuBtn.addEventListener('click', () => {
   menu.classList.toggle('active');
   header.classList.toggle('transparent');
   img.classList.toggle('quitar');
});
