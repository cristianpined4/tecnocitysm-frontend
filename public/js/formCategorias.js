"use strict";

const url = `${server}/categorias`;

let id = window.location.pathname.split("/");
id = id[id.length - 1];

console.log(id);

if (id) {
    fetch(`${url}/${id}`)
        .then((respuesta) => respuesta.json())
        .then((datos) => {
            console.log(datos);
            document.querySelector("#nombre").value = datos.nombre;
            document.querySelector("#descripcion").value = datos.descripcion;
            document.querySelector("#imagen").value = datos.imagen;
        })
        .catch((error) => console.log(error));
}

document
    .querySelector("#formCategorias")
    .addEventListener("submit", async (e) => {
        e.preventDefault();
        const formData = new FormData(e.target);
        let images = document.querySelector("#imagen").files;
        if (images.length > 0) {
            images = await encodeFileAsBase64URL(images[0]);
        }
        formData.append("imagen", images);
        const token = localStorage.getItem("token").replaceAll('"', "");
        fetch(url, {
            method: "POST",
            body: JSON.stringify(Object.fromEntries(formData)),
            headers: {
                "Content-Type": "application/json",
                Authorization: "Bearer " + token,
            },
        })
            .then((respuesta) => respuesta.json())
            .then((datos) => {
                console.log(datos);
                alert("Categoria guardada con éxito");
                //window.location.href = "/categorias";
            })
            .catch((error) => console.log(error));
    });
