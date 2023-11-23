"use strict";

let url = `${server}/modelos`;

const obtenerMarcas = async () => {
    const respuesta = await fetch(`${server}/marcas/get-marcas`, {
        method: "GET",
    });
    const datos = await respuesta.json();
    // selectMarcas.innerHTML = "";
};

const obtenerCategorias = async () => {
    const respuesta = await fetch(`${server}/categorias/get-categorias`, {
        method: "GET",
    });
    const datos = await respuesta.json();
    categoria = datos.categorias;
    // selectCategorias.innerHTML = "";
};
