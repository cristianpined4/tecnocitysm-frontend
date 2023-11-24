document.addEventListener("DOMContentLoaded", function() {
    const toggleButton = document.getElementById("toggleButton");
    const togglePrice = document.getElementById("togglePrice");
    const inputTexto = document.querySelector(".texto");
    const dollarCounter = document.getElementById("dollarCounter");
    const progressInput = document.getElementById("progressInput");

    // Inicialmente, ocultar el input de texto, el contador y la barra de progreso
    inputTexto.style.display = "none";
    dollarCounter.style.display = "none";
    progressInput.style.display = "none";

    toggleButton.addEventListener("click", function() {
        // Mostrar u ocultar el input de texto al hacer clic en "Nombre Marca"
        inputTexto.style.display = inputTexto.style.display === "none" ? "block" : "none";

        // No ocultar el contador y la barra de progreso al hacer clic en "Nombre Marca"
    });

    togglePrice.addEventListener("click", function() {
        // Mostrar u ocultar el contador y la barra de progreso al hacer clic en "Precio"
        dollarCounter.style.display = dollarCounter.style.display === "none" ? "inline" : "none";
        progressInput.style.display = progressInput.style.display === "none" ? "inline" : "none";

        // No ocultar el input de texto al hacer clic en "Precio"
        // Deja que ambos elementos se muestren al mismo tiempo
    });
});

// Obtenemos el elemento de la barra de progreso y el contador en dólares
const progressInput = document.getElementById('progressInput');
const dollarCounter = document.getElementById('dollarCounter');

// Define el rango máximo que desees, por ejemplo, 100
const maxRange = 100;

// Agrega un evento para actualizar el contador cuando cambia la barra de progreso
progressInput.addEventListener('input', () => {
    // Actualiza el valor del contador en dólares
    const dollarValue = (progressInput.value / 100) * maxRange; // Ajusta el rango máximo según tus necesidades
    dollarCounter.textContent = `$${dollarValue.toFixed(2)}`;
});

