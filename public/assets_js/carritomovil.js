// Selecciona el contenedor de todas las tarjetas
const contenedorTarjetas = document.querySelector('.Contenedor__Item');
const contenedorTotal = document.querySelector('.Contenedorr__Total');
let productos = [];

// Agrega un event listener al contenedor
contenedorTarjetas.addEventListener('click', (event) => {
  // Verifica si el elemento clickeado es un botón
  if (event.target.classList.contains('boton-sumar') || event.target.classList.contains('boton-restar')) {
    // Obtén la tarjeta padre del botón
    const tarjeta = event.target.closest('.Item--Tarjeta');
    // Selecciona el contador dentro de esa tarjeta
    const contador = tarjeta.querySelector('.contadorMovil');
    // Selecciona el total del item clickeado
    const precioItem = parseFloat(tarjeta.querySelector('p').textContent.replace('$', ''));
    let precioTotal = tarjeta.querySelector('p');

    const nombreTarjeta = tarjeta.querySelector('h2').textContent;

    const totalPago = contenedorTotal.querySelector('.Total-Text p');
    
    // Actualiza el contador según el botón clickeado
    if (event.target.classList.contains('boton-sumar')) {
      contador.textContent = parseInt(contador.textContent) + 1;
      if (parseInt(contador.textContent) == 1) {
        precioTotal.textContent = precioItem * parseInt(contador.textContent) + '$';
      } else {
        precioTotal.textContent = ((parseFloat(precioItem) / (parseInt(contador.textContent) - 1)) * parseInt(contador.textContent)).toFixed(2) + '$';
      } // Lo que hace es sacar el precio unitario del producto basandose en la cantidad ingresada y el precio total del item
    } else {
      contador.textContent = Math.max(parseInt(contador.textContent) - 1, 0);
      if (parseInt(contador.textContent) != 0) {
        precioTotal.textContent = ((parseFloat(precioItem) / (parseInt(contador.textContent) + 1)) * parseInt(contador.textContent)).toFixed(2) + '$';
      }
    }

    const productoParaCarrito = {
      nombre: nombreTarjeta,
      precio: parseFloat(precioItem),
      cantidad: parseInt(contador.textContent)
    }
    
    if(!productos.find(item => item.nombre === productoParaCarrito.nombre)){
      productos.push(productoParaCarrito);
    }else{
      const indice = productos.findIndex(item => item.nombre === productoParaCarrito.nombre);
      productos[indice].cantidad = productoParaCarrito.cantidad;
    }
    
    actualizarTotal();

    function actualizarTotal(){
      let sum = 0;
      productos.forEach(product => { // Itera todo los subtotales por cada producto
        sum += parseFloat(product.precio * product.cantidad);
      });
      totalPago.textContent = sum.toFixed(2) + '$'; // toFixed sirve para poner un número de decimales deseado
    }
  }
});


