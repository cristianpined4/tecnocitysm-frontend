"use strict";
const tabulación = document.getElementById("categorias");
const server = "http://localhost:8000/api";
let url = `${server}/categorias/get-categorias`;
tabulación.innerHTML = ``;
async function realizarPeticion() {
    try {
        const respuesta = await fetch(url);
        const datos = await respuesta.json();

        datos.categorias.forEach(element => {
            tabulación.innerHTML += `<td>${element.nombre}</td>
                <td>${element.descripcion}</td>
                <td><img src="" alt="categoria"></td>
                <td>${element.status}</td>
                <td>
                    <button type="submit" class="btn btn-danger" id="eliminar" name="${element.slug}">Eliminar</button>
                    <button type="submit" class="btn btn-success" id="actualizar" name="${element.slug}">Actualizar</button>
                </td>`;
        });

        // Coloca aquí el código que deseas ejecutar después de completar la petición fetch.
        console.log("La petición fetch ha sido completada.");
        const arrayEditar = document.querySelectorAll("#actualizar");
        arrayEditar.forEach(element => {
            element.addEventListener("click",()=>{
                window.location.href="http://localhost:8001/dashboard/categorias/formCategoria/"+element.getAttribute("name");
            });
        });
        const arrayEliminar = document.querySelectorAll("#eliminar");
        arrayEliminar.forEach(element => {
            element.addEventListener("click",()=>{
                const token = localStorage.getItem("token").replaceAll('"', "");
                let url = "http://localhost:8000/api/categorias/"+element.getAttribute("name");
                fetch("http://localhost:8000/api/categorias/"+element.getAttribute("name"))
                .then((respuesta) => respuesta.json())
                .then((datos) => {
                    fetch("http://localhost:8000/api/categorias/"+datos.categoria.id, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            Authorization: "Bearer " + token,
                        },
                    })
                    .then(respuesta => {
                        if (respuesta.ok) {
                            window.alert("Categoria Eliminada con exito");
                            // Puedes realizar acciones adicionales después de eliminar el elemento.
                            window.location.href="http://localhost:8001/categoria";
                        } else {
                            window.alert("No se pudo completar la accion");
                        }
                    })
                    .catch(error => {
                        console.log(error);
                    });
                })
                .catch((error) => console.log(error));
                
            });
        });

    } catch (error) {
        console.log(error);
    }
}

// Llama a la función para iniciar la ejecución.
realizarPeticion();

