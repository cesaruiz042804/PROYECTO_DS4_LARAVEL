const prevButton = document.querySelector('.prev'); //Boton para mover a la izquierda
const nextButton = document.querySelector('.next'); //Boton para mover a la derecha
const carouselItems = document.querySelector('.carousel-items');
const itemWidth = document.querySelector('.carousel-item').offsetWidth;
const items = document.querySelectorAll('.carousel-item'); // Selecciona todos los contendores con esa clase
let currentIndex = 0;

function showNext() {
    if (currentIndex < 4) {
        currentIndex++;
        carouselItems.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    }
}

function showPrev() {
    if (currentIndex > 0) {
        currentIndex--;
        carouselItems.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    }
}

function showSlide(filteredItems) {
    items.forEach((item) => {
        item.style.display = filteredItems.includes(item) ? 'block' : 'none'; // Busca entre todos los items, los items filtrados (haciendo uso de operador ternario)
    }); // En tal caso no se cumpla a condicion, tomaria el estilo block, en caso contrario, se oculta
}

nextButton.addEventListener('click', showNext);
prevButton.addEventListener('click', showPrev);


const inputBusqueda = document.querySelector('.search'); // Objeto de busqueda

inputBusqueda.addEventListener('input', () => {
    const searchTerm = inputBusqueda.value.toLowerCase(); // Lo que hace es poner todo en minuscula

    const filteredItems = Array.from(items).filter(item => { // Guarda los items en un array
        const itemName = item.getAttribute('data-name').toLowerCase();  // Busca los valores que se encuentran en los data-name
        return itemName.includes(searchTerm); // Si es true se guarda el dato, en caso contrario no se guarda
    });

    showSlide(filteredItems); // Envia como argumento los datos filtrados
});

