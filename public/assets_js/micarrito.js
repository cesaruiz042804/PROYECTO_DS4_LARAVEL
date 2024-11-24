const tarjetasIzquierda = document.querySelectorAll('.Carrusel-Item');
const contenedorDerecho = document.querySelector('.CarruselDerecho');
const carrito = [];

const contenedorDerechoTotal = document.querySelector('.CDerecho__Total'); // Este trae el div donde se encuentra el total

tarjetasIzquierda.forEach(tarjeta => {
  tarjeta.addEventListener('click', () => {
    const nuevoItem = document.createElement('div');
    nuevoItem.classList.add('CDerecho__Item', 'item1');

    // Obtener los datos de la tarjeta
    const imagen = tarjeta.querySelector('.Item-Img img');
    const nombreProducto = tarjeta.querySelector('.Item-Descripcion h2').textContent;
    const precioProducto = parseFloat(tarjeta.querySelector('.Item-Descripcion p').textContent.replace('$', ''));
    const precioSubtotal = parseFloat(tarjeta.querySelector('.Item-Descripcion p').textContent.replace('$', ''));

    // Crear un objeto para representar el producto en el carrito
    const productoParaCarrito = {
      nombre: nombreProducto,
      precio: precioProducto,
      subtotal: precioSubtotal,
      cantidad: 1
    };

    // Verificar si el producto ya existe en el carrito
    const productoExistente = carrito.find(item => item.nombre === productoParaCarrito.nombre);

    if (productoExistente) {

    } else {
      carrito.push(productoParaCarrito);

      // Crear el HTML del nuevo elemento
      nuevoItem.innerHTML = `
        <div class="ItemTotal-Img">
          <img src="${imagen.src}" alt="${nombreProducto}">
        </div>
        <div class="Item-Descripcion">
          <h2>${nombreProducto}</h2>
          <p class="subtotal">${precioProducto}</p>
        </div>
        <div class="Item-Cantidad">
          <button class="btn-restar">-</button>
          <label class="contador">1</label>
          <button class="btn-sumar">+</button>
        </div>
      `;

      contenedorDerecho.appendChild(nuevoItem);

      const btnRestar = nuevoItem.querySelector('.btn-restar');
      const btnSumar = nuevoItem.querySelector('.btn-sumar');
      const contador = nuevoItem.querySelector('.contador');
      const subtotal = nuevoItem.querySelector('.subtotal');
      const total = contenedorDerechoTotal.querySelector('.Total-Text p');

      productoParaCarrito.cantidad === 1 && actualizarSubtotales(1); // Esto es un operador terniario que sirve cuando se agrega por primera vez un producto

      // Función para actualizar el contador
      function actualizarContador(valor) {
        let cantidad = parseInt(contador.textContent);
        cantidad += valor;
        contador.textContent = Math.max(cantidad, 0); // Permite valores desde 0 en adelante

        actualizarSubtotales(cantidad);

        if (cantidad === 0) {
          // Eliminar el elemento padre (la tarjeta)
          nuevoItem.remove();

          // Encontrar el índice del producto en el carrito
          const indice = carrito.findIndex(item => item.nombre === productoParaCarrito.nombre);

          // Eliminar el producto del arreglo carrito
          if (indice !== -1) {
            carrito.splice(indice, 1);
          }
        }
      }

      function actualizarSubtotales(cantidad) {
        subtotal.textContent = (parseFloat(productoParaCarrito.precio) * cantidad).toFixed(2) + '$';
        productoParaCarrito.subtotal = subtotal.textContent; // Se guarda el subtotal del producto (precio * cantidad)
        actualizarTotal(); // Actualiza el total
      }

      function actualizarTotal() {
        let sum = 0;
        carrito.forEach(product => { // Itera todo los subtotales por cada producto
          sum += parseFloat(product.subtotal);
        });
        total.textContent = sum.toFixed(2) + '$'; // toFixed sirve para poner un número de decimales deseado
      }

      // Agregar event listeners
      btnRestar.addEventListener('click', () => {
        actualizarContador(-1);
      });

      btnSumar.addEventListener('click', () => {
        actualizarContador(1);
      });
    }
  });
});

//MenuHamburguesa
menuBtn.addEventListener('click', () => {
  menu.classList.toggle('active');
  header.classList.toggle('transparent');
  img.classList.toggle('quitar');
});


