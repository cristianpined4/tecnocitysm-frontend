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