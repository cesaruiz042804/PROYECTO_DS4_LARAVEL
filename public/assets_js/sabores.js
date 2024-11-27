
const items = document.querySelectorAll('.carousel-item'); // Selecciona todos los contendores con esa clase

function showSlide(filteredItems) {
    items.forEach((item) => {
        item.style.display = filteredItems.includes(item) ? 'block' : 'none'; // Busca entre todos los items, los items filtrados (haciendo uso de operador ternario)
    }); // En tal caso no se cumpla a condicion, tomaria el estilo block, en caso contrario, se oculta
}

const inputBusqueda = document.querySelector('.search'); // Objeto de busqueda

inputBusqueda.addEventListener('input', () => {
    const searchTerm = inputBusqueda.value.toLowerCase(); // Lo que hace es poner todo en minuscula

    const filteredItems = Array.from(items).filter(item => { // Guarda los items en un array
        const itemName = item.getAttribute('data-name').toLowerCase();  // Busca los valores que se encuentran en los data-name
        return itemName.includes(searchTerm); // Si es true se guarda el dato, en caso contrario no se guarda
    });

    showSlide(filteredItems); // Envia como argumento los datos filtrados
});




