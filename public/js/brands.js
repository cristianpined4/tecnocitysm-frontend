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

const seccionMarcas = document.getElementById("sectionMarcas");
const obtenerMarcas = async () => {
    const respuesta = await fetch("http://localhost:8000/api/marcas/get-marcas", {
        method: "GET",
    });
    const datos = await respuesta.json();
    let marca = "";
    datos.marcas.forEach(element => {
        marca+=`<div class="itemsProduct">
        <div class="imgProducts">
                <img src="${element.images[0].url}" alt="marcas">
            </div>
            <div class="infoProducto">
            <h4>${element.nombre}</h4>

            </div>

    </div>`;
    });
    seccionMarcas.innerHTML= marca;
    // selectMarcas.innerHTML = "";
};

obtenerMarcas();