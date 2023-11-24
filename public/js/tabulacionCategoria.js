"use strict";
const tabulación = document.getElementById("categorias");
const server = "http://localhost:8000/api";
let url = `${server}/categorias`;
tabulación.innerHTML = ``;
async function realizarPeticion() {
    try {
        const respuesta = await fetch(url, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                Authorization: `Bearer ${localStorage
                    .getItem("token")
                    .replaceAll('"', "")}`,
            },
        });
        const datos = await respuesta.json();
        let fragmento = "";
        datos.categorias.forEach((element) => {
            fragmento += `<tr class="align-middle">
            <td>${element.nombre}</td>
                <td>${element.descripcion}</td>
                <td><img src="${
                    element.images.length > 0
                        ? element.images[0].url
                        : "https://www.thermaxglobal.com/wp-content/uploads/2020/05/image-not-found.jpg"
                }" alt="categoria" width="50" height="50" class="rounded-circle"></td>
                <td>${
                    element.status == "activo"
                        ? `<span class="badge bg-success">Activo</span>`
                        : `<span class="badge bg-danger">Inactivo</span>`
                }</td>
                <td>
                    <a href="/dashboard/categorias/${
                        element.slug
                    }" class="btn btn-warning">Editar</a>
                    <button type="button" class="btn btn-danger" id="eliminar" name="${
                        element.id
                    }">Eliminar</button>
                </td>
                </tr>`;
        });
        tabulación.innerHTML = fragmento;
    } catch (error) {
        console.log(error);
    }
}
// Llama a la función para iniciar la ejecución.
realizarPeticion();

document.addEventListener("click", async (e) => {
    if (e.target.id == "eliminar") {
        let valida = confirm("¿Está seguro de eliminar la categoría?");
        if (valida == false) {
            return;
        }
        try {
            const token = localStorage.getItem("token").replaceAll('"', "");
            const respuesta = await fetch(
                `${server}/categorias/${e.target.name}`,
                {
                    method: "DELETE",
                    headers: {
                        "Content-Type": "application/json",
                        Authorization: `Bearer ${token}`,
                    },
                }
            );
            const datos = await respuesta.json();
            if (datos.success == true) {
                alert(datos.message);
                realizarPeticion();
            } else {
                alert(datos.message);
            }
        } catch (error) {
            console.log(error);
        }
    }
});
