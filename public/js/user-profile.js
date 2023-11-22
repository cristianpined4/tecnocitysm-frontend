/*
*   Obtener los datos del usuario logueado
*   y mostrarlos en el formulario
* */
const currentPassword = document.getElementById('currentPassword')

// Obtener los datos del usuario logueado
const password = currentPassword.value;

if(localStorage.getItem("token") !== null){

    const token = localStorage.getItem('token').slice(1, -1);
    const txtNameField = document.getElementById("nombre");
    const txtUsernameField = document.getElementById("username");
    const txtEmailField = document.getElementById("email");

    // Configurar las opciones de la solicitud Fetch
    const requestOptions = {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${token}`
        }
    };

    // Realizar la solicitud Fetch
    fetch('http://localhost:8000/api/auth/current-user', requestOptions)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Error: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            // Manipular los datos de respuesta aquí
            txtNameField.value = data.name;
            txtUsernameField.value = data.username;
            txtEmailField.value = data.email;
        })
        .catch(error => {
            // Manejar errores de la solicitud
            console.error('Error de la solicitud:', error);
        });
}
