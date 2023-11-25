"use strict";
const tabulación = document.getElementById("modelos");
const server = "http://localhost:8000/api";
let url = `${server}/modelos`;
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
        datos.modelos.forEach((element) => {
            fragmento += `<tr class="align-middle">
            <td>${element.nombre}</td>
                <td>${element.descripcion}</td>
                <td>${element.categoria.nombre}</td>
                <td>${element.marca.nombre}</td>
                <td>
                    <a href="/dashboard/modelos/${element.id}" class="btn btn-warning">Editar</a>
                    <button type="button" class="btn btn-danger" id="eliminar" name="${element.id}">Eliminar</button>
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
        let valida = confirm("¿Está seguro de eliminar el modelo?");
        if (valida == false) {
            return;
        }
        try {
            const token = localStorage.getItem("token").replaceAll('"', "");
            const respuesta = await fetch(
                `${server}/modelos/${e.target.name}`,
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
