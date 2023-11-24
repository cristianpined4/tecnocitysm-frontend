"use strict";

let url = `${server}/modelos`;
const opcionesMarca = document.getElementById("id_marca");
const opcionesCategoria = document.getElementById("id_categoria");

const obtenerMarcas = async () => {
    const respuesta = await fetch("http://localhost:8000/api/marcas/get-marcas", {
        method: "GET",
    });
    const datos = await respuesta.json();
    let marca = "";
    console.log(datos.marcas);
    datos.marcas.forEach(element => {
        marca+=`<option value="${element.id}">${element.nombre}</option>`;
    });
    opcionesMarca.innerHTML= marca;
    // selectMarcas.innerHTML = "";
};

const obtenerCategorias = async () => {
    const respuesta = await fetch(`${server}/categorias/get-categorias`, {
        method: "GET",
    });
    const datos = await respuesta.json();
    console.log(datos.categorias);
    let categoria = "";
    datos.categorias.forEach(element => {
        categoria +=`<option value="${element.id}">${element.slug}</option>`
    });
    opcionesCategoria.innerHTML = categoria;
    // selectCategorias.innerHTML = "";
};
obtenerMarcas();
obtenerCategorias();



let id = window.location.pathname.split("/");
id = id[id.length - 1];
let isId = false;

if (id && id != "&nueva&") {
    fetch(`${url}/${id}`)
        .then((respuesta) => respuesta.json())
        .then((datos) => {
            if (datos.success) {
                document.querySelector("#nombre").value = datos.modelo.nombre;
                document.querySelector("#descripcion").value = datos.modelo.descripcion;
                isId = true;
                url = `${url}/${datos.modelo.id}`;
                console.log(isId);
            }
        })
        .catch((error) => console.log(error));
}

document
    .querySelector("#FormModelo")
    .addEventListener("submit", async (e) => {
        e.preventDefault();
        const formData = new FormData(e.target);
        const token = localStorage.getItem("token").replaceAll('"', "");
        console.log(isId);
        fetch(url, {
            method: isId ? "PUT" : "POST",
            body: JSON.stringify(Object.fromEntries(formData)),
            headers: {
                "Content-Type": "application/json",
                Authorization: "Bearer " + token,
            },
        })
            .then((respuesta) => respuesta.json())
            .then((datos) => {
                console.log(datos);
                alert("Modelo guardado con exito con éxito");
                window.location.href = "/dashboard/modelo";
            })
            .catch((error) => console.log(error));
    });
document.getElementById("cancelar").addEventListener("click", () => {
    window.location.href = "/dashboard/modelo";
});