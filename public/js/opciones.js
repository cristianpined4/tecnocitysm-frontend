// Obtener el elemento select por su ID
let select = document.getElementById('idcategoria');

// Inicializar el arreglo dataa con un valor
let dataa = [];

// Inicializar la variable categorias
let categorias = null;

// Realizar la solicitud fetch
fetch('http://localhost:8000/api/categorias/get-categorias')
    .then(response => response.json())
    .then(data => {

        // Verificar si la solicitud fetch fue exitosa
        if (data.success) {
            console.log(data.message);
            categorias = data.categorias;

            // Agregar los datos al arreglo dataa
            dataa.push(data.message);

            // Recorrer el arreglo
            console.log("Entró");
            categorias.forEach(element => {
                let option = document.createElement('option');
                option.value = element;
                option.text = element;
                select.add(option);
            });
        } else {
            console.log("No entró");
        }
    })
    .catch(error => {
        console.error('Error en la solicitud fetch:', error);
    });
