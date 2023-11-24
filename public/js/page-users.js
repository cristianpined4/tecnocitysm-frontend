"use strict";

const url = `${server}/usuarios`;

const deleteUser = async (id) => {
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
                <td>
                    <a href="/users/${
                        user.id
                    }/edit" class="btn btn-warning">Edit</a>
                    ${
                        user.id == users.current_user.id
                            ? ""
                            : `<button class="btn btn-danger" onclick="deleteUser(${user.id})">Delete</button>`
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
