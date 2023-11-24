"use strict";

let url = `${server}/usuarios`;

const deleteUser = async (id) => {
    if (confirm("¿Estas seguro de eliminar este usuario?")) {
        let headers = {
            "Content-Type": "application/json",
            Authorization:
                "Bearer " + localStorage.getItem("token").replace(/['"]+/g, ""),
        };
        const response = await fetch(url + "/" + id, {
            method: "DELETE",
            headers: headers,
        });
        const data = await response.json();
        if (data.success) {
            alert(data.message);
            getUsers();
        } else {
            alert(data.message);
        }
    }
};

const getUsers = async () => {
    let headers = {
        "Content-Type": "application/json",
        Authorization:
            "Bearer " + localStorage.getItem("token").replace(/['"]+/g, ""),
    };
    const response = await fetch(url, {
        method: "GET",
        headers: headers,
    });
    const users = await response.json();

    let usersHTML = "";
    users.users.forEach((user) => {
        let [nombre, apellido] = user.name.split(" ");
        usersHTML += `
            <tr  class="align-middle">
                <td>${
                    user.images.length > 0
                        ? `<img src="${user.images[0].url}" width="50" height="50" class="rounded-circle">`
                        : `<img src="https://ui-avatars.com/api/?name=${nombre}+${apellido}&background=random&length=1&rounded=true&size=50" class="rounded-circle">`
                }</td>
                <td>${nombre}</td>
                <td>${apellido ? apellido : ""}</td>
                <td>${user.email}</td>
                <td><span class="badge bg-${
                    user.rol.id != 1 ? "danger" : "primary"
                }">${user.rol.name}</span></td>
                <td><span class="badge bg-${
                    user.status == "active" ? "success" : "danger"
                }">${
            user.status == "active" ? "Activo" : "Inactivo"
        }</span></td>
                <td>
                    <a href="/dashboard/usuarios/${
                        user.id
                    }" class="btn btn-warning">Editar</a>
                    ${
                        user.id == users.current_user.id
                            ? ""
                            : `<button class="btn btn-danger" onclick="deleteUser(${user.id})">Borrar</button>`
                    }
                </td>
            </tr>
        `;
    });
    document.querySelector("#table-user tbody").innerHTML = usersHTML;
};

if (document.getElementById("table-user") != null) {
    getUsers();
}

let formUser = document.getElementById("FormUser");

if (formUser != null) {
    let id = window.location.pathname.split("/");
    id = id[id.length - 1];
    let isId = false;

    if (id && id != "&nuevo&") {
        fetch(`${url}/${id}`, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                Authorization:
                    "Bearer " +
                    localStorage.getItem("token").replace(/['"]+/g, ""),
            },
        })
            .then((respuesta) => respuesta.json())
            .then((datos) => {
                if (datos.success) {
                    let [nombre, apellido] = datos.user.name.split(" ");
                    document.querySelector("#nombre").value = nombre;
                    document.querySelector("#apellido").value = apellido
                        ? apellido
                        : "";
                    document.querySelector("#email").value = datos.user.email;
                    document.querySelector("#rol_id").value = datos.user.rol.id;
                    document.querySelector("#status").value = datos.user.status;
                    document.querySelector("h1").textContent = "Editar Usuario";
                    document.title = "Editar Usuario";
                    isId = true;
                    url = `${url}/${datos.user.id}`;
                    if (datos.user.images.length > 0) {
                        let img = document.createElement("img");
                        img.src = datos.user.images[0].url;
                        img.style.width = "80%";
                        document
                            .querySelector("#imagenEdit")
                            .insertAdjacentElement("afterend", img);
                    }
                }
            })
            .catch((error) => console.log(error));
    }
    formUser.addEventListener("submit", async (e) => {
        e.preventDefault();
        const formData = new FormData(e.target);
        let nombreCompleto =
            document.querySelector("#nombre").value +
            " " +
            document.querySelector("#apellido").value;
        formData.append("name", nombreCompleto);
        if (isId) {
            if (document.querySelector("#password").value != "") {
                formData.append(
                    "password",
                    document.querySelector("#password").value
                );
            } else {
                formData.delete("password");
            }
        }

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
                if (datos.success) {
                    alert(datos.message);
                    window.location.href = "/dashboard/usuarios";
                } else {
                    alert(datos.message);
                }
            })
            .catch((error) => console.log(error));
    });
}
