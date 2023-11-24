"use strict";
const server = "http://localhost:8000/api";

const encodeFileAsBase64URL = async (file) => {
    return new Promise((resolve) => {
        const reader = new FileReader();
        reader.addEventListener("loadend", () => {
            resolve(reader.result);
        });
        reader.readAsDataURL(file);
    });
};

const volver = () => navigator.back();

let url = `${server}/categorias`;

let id = window.location.pathname.split("/");
id = id[id.length - 1];
let isId = false;

if (id && id != "&nueva&") {
    fetch(`${url}/${id}`)
        .then((respuesta) => respuesta.json())
        .then((datos) => {
            if (datos.success) {
                document.querySelector("#nombre").value =
                    datos.categoria.nombre;
                document.querySelector("#descripcion").value =
                    datos.categoria.descripcion;
                document.querySelector("#status").value =
                    datos.categoria.status;
                document.querySelector("h2").textContent = "Editar Categoria";
                document.title = "Editar Categoria";
                isId = true;
                url = `${url}/${datos.categoria.id}`;
                if (datos.categoria.images.length > 0) {
                    let img = document.createElement("img");
                    img.src = datos.categoria.images[0].url;
                    img.style.width = "35%";
                    document
                        .querySelector("#imagenEdit")
                        .insertAdjacentElement("afterend", img);
                }
            }
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
            formData.delete("imagen");
            formData.append("imagen", images);
        } else {
            formData.delete("imagen");
        }
        const token = localStorage.getItem("token").replaceAll('"', "");
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
                alert("Categoria guardada con éxito");
                window.location.href = "/dashboard/categorias";
            })
            .catch((error) => console.log(error));
    });
document.getElementById("cancelar").addEventListener("click", () => {
    window.location.href = "/dashboard/categorias";
});
