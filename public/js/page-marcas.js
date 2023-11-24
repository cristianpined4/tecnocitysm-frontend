"use strict";
let url = `${server}/marcas`;

let tablaMarcas = document.querySelector("#tablaMarca");
if (tablaMarcas != null) {
    const getMarcas = async () => {
        const respuesta = await fetch(url, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                Authorization:
                    "Bearer " +
                    localStorage.getItem("token").replace(/['"]+/g, ""),
            },
        });
        const datos = await respuesta.json();
        let marcasHTML = "";
        datos.marcas.forEach((marca) => {
            marcasHTML += `
                <tr class="align-middle">
                    <td>${marca.nombre}</td>
                    <td>${marca.descripcion}</td>
                    <td><img src="${
                        marca.images.length > 0
                            ? marca.images[0].url
                            : "https://www.thermaxglobal.com/wp-content/uploads/2020/05/image-not-found.jpg"
                    }" alt="marca" width="50" height="50" class="rounded-circle"></td>
                    <td><span class="badge bg-${
                        marca.status == "activo" ? "success" : "danger"
                    }">${
                marca.status == "activo" ? "Activo" : "Inactivo"
            }</span></td>
                    <td>
                        <a href="/dashboard/marcas/${
                            marca.slug
                        }" class="btn btn-warning">Editar</a>
                        <button class="btn btn-danger delete" data-id="${
                            marca.id
                        }">Borrar</button>
                    </td>
                </tr>
            `;
        });
        document.querySelector("#tablaMarca tbody").innerHTML = marcasHTML;
    };
    getMarcas();

    document
        .querySelector("#tablaMarca tbody")
        .addEventListener("click", async (e) => {
            if (e.target.matches("button.delete")) {
                const id = e.target.getAttribute("data-id");
                if (confirm("¿Estas seguro de eliminar esta marca?")) {
                    const respuesta = await fetch(`${url}/${id}`, {
                        method: "DELETE",
                        headers: {
                            "Content-Type": "application/json",
                            Authorization:
                                "Bearer " +
                                localStorage
                                    .getItem("token")
                                    .replace(/['"]+/g, ""),
                        },
                    });
                    const datos = await respuesta.json();
                    if (datos.success) {
                        alert(datos.message);
                        getMarcas();
                    } else {
                        alert(datos.message);
                    }
                }
            }
        });
}

if (document.querySelector("#formMarcas")) {
    let id = window.location.pathname.split("/");
    id = id[id.length - 1];
    let isId = false;

    if (id && id != "&nueva&") {
        fetch(`${url}/${id}`)
            .then((respuesta) => respuesta.json())
            .then((datos) => {
                if (datos.success) {
                    document.querySelector("#nombre").value =
                        datos.marca.nombre;
                    document.querySelector("#descripcion").value =
                        datos.marca.descripcion;
                    document.querySelector("#status").value =
                        datos.marca.status;
                    document.querySelector("h2").textContent = "Editar Marca";
                    document.title = "Editar Marca";
                    isId = true;
                    url = `${url}/${datos.marca.id}`;

                    if (datos.marca.images.length > 0) {
                        let img = document.createElement("img");
                        img.src = datos.marca.images[0].url;
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
        .querySelector("#formMarcas")
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
            const respuesta = await fetch(url, {
                method: isId ? "PUT" : "POST",
                headers: {
                    "Content-Type": "application/json",
                    Authorization: "Bearer " + token,
                },
                body: JSON.stringify(Object.fromEntries(formData)),
            });
            const datos = await respuesta.json();
            if (datos.success) {
                location.href = "/dashboard/marcas";
                alert(datos.message);
            } else {
                alert(datos.message);
            }
        });
}
