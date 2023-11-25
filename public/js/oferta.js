document.addEventListener("DOMContentLoaded", function() {
    const marca = document.getElementById("toggleButton");
    const inputTexto = document.querySelector(".texto");

    marca.addEventListener("click", function() {
        // Alternar la clase para cambiar la apariencia de la flecha
        marca.classList.toggle("texto-visible");

        // Alternar la visibilidad del input
        inputTexto.style.display = inputTexto.style.display === "none" ? "block" : "none";
    });
});



// ordenar por filtro

document.addEventListener('DOMContentLoaded', function () {
    var selectElement = document.querySelector('.select2');
    var productos = document.querySelectorAll('.itemsProduct');

    selectElement.addEventListener('change', function () {
        var selectedOption = this.value;

        if (selectedOption === 'Nombre (A-Z)') {
            ordenarPorNombreAscendente(productos);
        } else if (selectedOption === 'Nombre (Z-A)') {
            ordenarPorNombreDescendente(productos);
        } else if (selectedOption === 'Mayor Precio') {
            ordenarPorPrecioDescendente(productos);
        } else if (selectedOption === 'Menor Precio') {
            ordenarPorPrecioAscendente(productos);
        }
    });

    function ordenarPorNombreAscendente(productos) {
        var productosArray = Array.from(productos);

        productosArray.sort(function (a, b) {
            var nombreA = a.querySelector('.infoProducto p').textContent.toLowerCase();
            var nombreB = b.querySelector('.infoProducto p').textContent.toLowerCase();
            return nombreA.localeCompare(nombreB);
        });

        limpiarYAgregar(productosArray);
    }

    function ordenarPorNombreDescendente(productos) {
        var productosArray = Array.from(productos);

        productosArray.sort(function (a, b) {
            var nombreA = a.querySelector('.infoProducto p').textContent.toLowerCase();
            var nombreB = b.querySelector('.infoProducto p').textContent.toLowerCase();
            return nombreB.localeCompare(nombreA);
        });

        limpiarYAgregar(productosArray);
    }

    function ordenarPorPrecioDescendente(productos) {
        var productosArray = Array.from(productos);

        productosArray.sort(function (a, b) {
            var precioA = parseFloat(a.querySelector('.precios .precios1').textContent.replace('$', '').replace(',', ''));
            var precioB = parseFloat(b.querySelector('.precios .precios1').textContent.replace('$', '').replace(',', ''));
            return precioB - precioA;
        });

        limpiarYAgregar(productosArray);
    }

    function ordenarPorPrecioAscendente(productos) {
        var productosArray = Array.from(productos);

        productosArray.sort(function (a, b) {
            var precioA = parseFloat(a.querySelector('.precios .precios1').textContent.replace('$', '').replace(',', ''));
            var precioB = parseFloat(b.querySelector('.precios .precios1').textContent.replace('$', '').replace(',', ''));
            return precioA - precioB;
        });

        limpiarYAgregar(productosArray);
    }

    function limpiarYAgregar(productosArray) {
        var contenedorProductos = document.querySelector('.Productscategoria .inferior');

        // Limpiamos el contenedor
        contenedorProductos.innerHTML = '';

        // Agregamos los productos ordenados
        productosArray.forEach(function (producto) {
            contenedorProductos.appendChild(producto);
        });
    }
});