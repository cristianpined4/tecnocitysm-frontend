/*
*   Este archivo se encarga de actualizar los datos del usuario
*  en la base de datos
* */
const currentPassword = document.getElementById('currentPassword');
const newPassword = document.getElementById('newPassword');
const confirmPassword = document.getElementById('confirmPassword');
const btnUpdate = document.getElementById('btnUpdate');

// Obtener los datos del usuario logueado
const password = currentPassword.value;
const new_password = newPassword.value;
const confirm_password = confirmPassword.value;

// Realizar la solicitud Fetch
if(btnUpdate){
    btnUpdate.addEventListener('click', (e) => {
        // e.preventDefault();
        console.log("Hola");
        if(new_password === confirm_password && password){
            const formData = new FormData();
            formData.append('password', password);
            formData.append('new_password', new_password);
            fetch('http://localhost:8000/api/profile/update', {
                method: 'PUT',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Solo almacenar el token si la solicitud fue exitosa
                        localStorage.removeItem("token")
                        localStorage.setItem("token", JSON.stringify(data.access_token));
                        console.log("Token almacenado en localStorage:", data.access_token);
                        window.location.href = "http://localhost:8001/inicio"
                    } else {
                        console.log("Error en la solicitud:", data.message);
                    }
                })
                .catch(error => console.log('Error', error));
            }
        }
    );
}
