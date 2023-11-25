"use strict";
let url = `${server}/productos`;

const formProducto = document.querySelector("#formProducto");
const tablaProductos = document.querySelector("#tablaProducto");

const getCategorias = async (isReturn = false) => {
    let urlCategoria = `${server}/categorias/get-categorias`;

    const respuesta = await fetch(urlCategoria, {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
        },
    });
    const datos = await respuesta.json();
    if (datos.success) {
        let categorias = datos.categorias;
        if (isReturn) {
            return categorias;
        }
        let html = "<option value=''>Selecciona una categoria</option>";
        categorias.forEach((categoria) => {
            html += `<option value="${categoria.id}">${categoria.nombre}</option>`;
        });
        document.querySelector("#categoria").innerHTML = html;
    } else {
        alert(datos.message);
    }
};

const getMarcas = async () => {
    let urlMarca = `${server}/marcas/get-marcas`;

    const respuesta = await fetch(urlMarca, {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
        },
    });
    const datos = await respuesta.json();
    if (datos.success) {
        let marcas = datos.marcas;
        return marcas;
    } else {
        alert(datos.message);
    }
};

const getModelos = async () => {
    let urlModelo = `${server}/modelos/get-modelos`;

    const respuesta = await fetch(urlModelo, {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
        },
    });
    const datos = await respuesta.json();
    if (datos.success) {
        let modelos = datos.modelos;
        return modelos;
    } else {
        alert(datos.message);
    }
};

const getCodeNuevoProducto = async () => {
    let urlCode = `${server}/productos/get-new-code`;

    const respuesta = await fetch(urlCode, {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
            Authorization:
                "Bearer " + localStorage.getItem("token").replaceAll('"', ""),
        },
    });
    const datos = await respuesta.json();
    if (datos.success) {
        let code = datos.newCode;
        document.querySelector("#codigo_producto").value = code;
    } else {
        alert(datos.message);
    }
};

if (formProducto != null) {
    let id = window.location.pathname.split("/");
    id = id[id.length - 1];
    let isId = false;
    if (id && id != "&nuevo&") {
        fetch(`${url}/${id}`)
            .then((respuesta) => respuesta.json())
            .then(async (datos) => {
                if (datos.success) {
                    document.querySelector("#codigo_barras").value =
                        datos.producto.codigo_barras;
                    document.querySelector("#codigo_producto").value =
                        datos.producto.codigo_producto;
                    document.querySelector("#nombre").value =
                        datos.producto.nombre;
                    document.querySelector("#descripcion").value =
                        datos.producto.descripcion;
                    document.querySelector("#precio_compra").value =
                        datos.producto.precio_compra;
                    document.querySelector("#precio_venta").value =
                        datos.producto.precio_venta;
                    document.querySelector("#status").value =
                        datos.producto.status;
                    document.querySelector("#stock").value =
                        datos.producto.stock;
                    let Categorias = await getCategorias(true);
                    let html =
                        "<option value=''>Selecciona una categoria</option>";
                    Categorias.forEach((categoria) => {
                        if (categoria.id == datos.producto.id_categoria) {
                            html += `<option value="${categoria.id}" selected>${categoria.nombre}</option>`;
                        } else {
                            html += `<option value="${categoria.id}">${categoria.nombre}</option>`;
                        }
                    });
                    document.querySelector("#categoria").innerHTML = html;
                    let Marcas = await getMarcas();
                    html = "<option value=''>Selecciona una marca</option>";
                    let marcasfiltradas = [];
                    Marcas.forEach((marca) => {
                        if (marca.modelos.length > 0) {
                            marca.modelos.forEach((modelo) => {
                                if (
                                    modelo.id_categoria ==
                                    datos.producto.id_categoria
                                ) {
                                    marcasfiltradas.push(marca);
                                    return;
                                }
                            });
                        }
                    });
                    // borramos las marcas repetidas a partir de su id
                    marcasfiltradas = marcasfiltradas.filter(
                        (marca, index, self) =>
                            index === self.findIndex((m) => m.id === marca.id)
                    );
                    marcasfiltradas.forEach((marca) => {
                        if (marca.id == datos.producto.id_marca) {
                            html += `<option value="${marca.id}" selected>${marca.nombre}</option>`;
                        } else {
                            html += `<option value="${marca.id}">${marca.nombre}</option>`;
                        }
                    });
                    document.querySelector("#marca").innerHTML = html;
                    marcasfiltradas.forEach((marca) => {
                        if (marca.id == datos.producto.id_marca) {
                            html =
                                "<option value=''>Selecciona un modelo</option>";
                            marca.modelos.forEach((modelo) => {
                                if (
                                    modelo.id_marca == marca.id &&
                                    modelo.id_categoria ==
                                        datos.producto.id_categoria
                                ) {
                                    if (modelo.id == datos.producto.id_modelo) {
                                        html += `<option value="${modelo.id}" selected>${modelo.nombre}</option>`;
                                    } else {
                                        html += `<option value="${modelo.id}">${modelo.nombre}</option>`;
                                    }
                                }
                            });
                        }
                    });
                    document.querySelector("#modelo").innerHTML = html;
                    document.querySelector("h2").textContent =
                        "Editar Producto";
                    document.title = "Editar Producto";
                    isId = true;
                    url = `${url}/${datos.producto.id}`;
                    if (datos.producto.images.length > 0) {
                        let html = "";
                        datos.producto.images.forEach((image) => {
                            html += `
                                <div style="display: flex !important;flex-direction: column;justify-content: space-around !important">
                                <img src="${image.url}" style="width: 100%;">
                                <button class="btn btn-danger btn-block delete-img mt-2" data-id="${image.id}">Eliminar</button>
                                </div>
                            `;
                        });
                        document.querySelector("#imagenEdit").innerHTML = html;
                    }
                }
            })
            .catch((error) => console.log(error));
    } else {
        getCodeNuevoProducto();
        getCategorias();
    }
    document
        .querySelector("#categoria")
        .addEventListener("change", async (e) => {
            let idCategoria = e.target.value;
            let marcas = await getMarcas();
            let html = "<option value=''>Selecciona una marca</option>";
            let marcasfiltradas = [];

            marcas.forEach((marca) => {
                if (marca.modelos.length > 0) {
                    marca.modelos.forEach((modelo) => {
                        if (modelo.id_categoria == idCategoria) {
                            marcasfiltradas.push(marca);
                            return;
                        }
                    });
                }
            });
            // borramos las marcas repetidas a partir de su id
            marcasfiltradas = marcasfiltradas.filter(
                (marca, index, self) =>
                    index === self.findIndex((m) => m.id === marca.id)
            );
            marcasfiltradas.forEach((marca) => {
                html += `<option value="${marca.id}">${marca.nombre}</option>`;
            });
            document.querySelector("#marca").innerHTML = html;
            document.querySelector("#modelo").innerHTML =
                "<option value=''>Selecciona un modelo</option>";
        });
    document.querySelector("#marca").addEventListener("change", async (e) => {
        let idMarca = e.target.value;
        let idCategoria = document.querySelector("#categoria").value;
        let modelos = await getModelos(idCategoria, idMarca);
        let html = "<option value=''>Selecciona un modelo</option>";
        modelos.forEach((modelo) => {
            if (
                modelo.id_marca == idMarca &&
                modelo.id_categoria == idCategoria
            ) {
                html += `<option value="${modelo.id}">${modelo.nombre}</option>`;
            }
        });
        document.querySelector("#modelo").innerHTML = html;
    });

    document.addEventListener("click", async (e) => {
        if (e.target.classList.contains("delete-img")) {
            let idImage = e.target.dataset.id;
            let urlImage = `${server}/productos/borrar-imagen/${idImage}`;
            const respuesta = await fetch(urlImage, {
                method: "DELETE",
                headers: {
                    "Content-Type": "application/json",
                    Authorization:
                        "Bearer " +
                        localStorage.getItem("token").replaceAll('"', ""),
                },
            });
            const datos = await respuesta.json();
            if (datos.success) {
                alert(datos.message);
                let html = "";
                datos.images.forEach((image) => {
                    html += `
                        <div style="display: flex !important;flex-direction: column;justify-content: space-around !important">
                        <img src="${image.url}" style="width: 100%;">
                        <button class="btn btn-danger btn-block delete-img mt-2" data-id="${image.id}">Eliminar</button>
                        </div>`;
                });
                document.querySelector("#imagenEdit").innerHTML = html;
            } else {
                alert(datos.message);
            }
        }
    });

    formProducto.addEventListener("submit", async (e) => {
        e.preventDefault();
        const formData = new FormData(e.target);
        let images = document.querySelector("#imagen").files;
        if (images.length > 0) {
            let imagenes = [];
            for (let i = 0; i < images.length; i++) {
                imagenes.push(await encodeFileAsBase64URL(images[i]));
            }
            imagenes = imagenes.join("||");
            formData.delete("imagen");
            formData.append("imagen", imagenes);
        } else {
            formData.delete("imagen");
        }
        const respuesta = await fetch(url, {
            method: isId ? "PUT" : "POST",
            body: JSON.stringify(Object.fromEntries(formData)),
            headers: {
                "content-type": "application/json",
                Authorization:
                    "Bearer " +
                    localStorage.getItem("token").replaceAll('"', ""),
            },
        });
        const datos = await respuesta.json();
        if (datos.success) {
            alert(datos.message);
            window.location.href = "/dashboard/productos";
        } else {
            alert(datos.message);
        }
    });
}

const number_formart = (
    $value,
    $symbol = "$",
    $decimal = 2,
    $decimal_sep = ".",
    $thousands_sep = ","
) => {
    return (
        $symbol +
        parseFloat($value)
            .toFixed($decimal)
            .replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
    );
};

const getProductos = () => {
    fetch(url, {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
            Authorization:
                "Bearer " + localStorage.getItem("token").replaceAll('"', ""),
        },
    })
        .then((respuesta) => respuesta.json())
        .then((datos) => {
            if (datos.success) {
                let html = "";
                datos.productos.forEach((producto) => {
                    html += `
                    <tr class="align-middle">
                        <td><img src="${
                            producto.images.length > 0
                                ? producto.images[0].url
                                : "https://www.thermaxglobal.com/wp-content/uploads/2020/05/image-not-found.jpg"
                        }" alt="categoria" width="50" height="50" class="rounded-circle"></td>
                        <td>${producto.nombre}</td>
                        <td>${producto.descripcion}</td>
                        <td>${
                            producto.stock == 0
                                ? `<span class="badge bg-danger">Agotado</span>`
                                : producto.stock < 5
                                ? `<span class="badge bg-warning">Poco stock</span>`
                                : `<span class="badge bg-success">${producto.stock} Unidades</span>`
                        }</td>
                        <td>${number_formart(producto.precio_venta)}</td>
                        <td>
                            <a href="/dashboard/productos/${
                                producto.id
                            }" class="btn btn-warning">
                                Editar
                            </a>
                            <button type="button" class="btn btn-danger eliminar" name="${
                                producto.id
                            }">Borrar</button>
                        </td>
                    </tr>
                `;
                });
                tablaProductos.querySelector("tbody").innerHTML = html;
            }
        });
};

if (tablaProductos != null) {
    getProductos();
    document.addEventListener("click", async (e) => {
        if (e.target.classList.contains("eliminar")) {
            let id = e.target.name;
            let valida = confirm("¿Está seguro de eliminar el producto?");
            if (valida == false) {
                return;
            }
            const respuesta = await fetch(`${url}/${id}`, {
                method: "DELETE",
                headers: {
                    "Content-Type": "application/json",
                    Authorization:
                        "Bearer " +
                        localStorage.getItem("token").replaceAll('"', ""),
                },
            });
            const datos = await respuesta.json();
            if (datos.success) {
                alert(datos.message);
                getProductos();
            } else {
                alert(datos.message);
            }
        }
    });
}
