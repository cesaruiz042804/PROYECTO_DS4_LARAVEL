const menuBtn = document.getElementById('MenuHamburguesa');
const menu = document.querySelector('.Header__NavegadorSecundario');
const header = document.querySelector('header');
const img = document.getElementById('ImgLogo');

const elementoAOcultar = document.querySelector('.header-a');
const elementoAOcultar2 = document.querySelector('.header__nav img');

//MenuHamburguesa
menuBtn.addEventListener('click', () => {
  menu.classList.toggle('active'); 
  header.classList.toggle('transparent');
  elementoAOcultar.classList.toggle('oculto');
  elementoAOcultar2.classList.toggle('oculto');
  });
