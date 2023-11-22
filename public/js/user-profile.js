/*
*   Obtener los datos del usuario logueado
*   y mostrarlos en el formulario
* */

const currentPassword = document.getElementById('currentPassword');
const newPassword = document.getElementById('newPassword');
const confirmPassword = document.getElementById('confirmPassword');
const btnUpdatePassword = document.getElementById('btnUpdatePassword');

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
        headers: { 'Authorization': `Bearer ${token}`}
    };

    // Realizar la solicitud Fetch
    fetch('http://localhost:8000/api/auth/profile', requestOptions)
        .then(response => {
            if (!response.ok) { throw new Error(`Error: ${response.status}`); }
            return response.json();
        })
        .then(data => {
            txtNameField.value = data.name;
            txtUsernameField.value = data.username;
            txtEmailField.value = data.email;

            if(btnUpdatePassword !== null){
                btnUpdatePassword.addEventListener('click', (e) => {
                    // e.preventDefault();

                    if(password.value !== ""){
                        if(newPassword.length >= 8 && newPassword.value === confirmPassword.value){
                            const formData = new FormData();
                            formData.append('name', data.name);
                            formData.append('email', data.email);
                            formData.append('currentPassword', password);
                            formData.append('newPassword', newPassword.value);
                            axios.put('http://localhost:8000/api/auth/update', formData)
                                .then(response => {
                                    console.log(response.data);
                                    if(response.data.success){
                                        console.log(response.data.message);
                                        window.location.href="http://localhost:8001/profile";
                                    }else{ console.log(response.data.message); }
                                })
                                .catch(error => { console.log(error); });
                        }else{ window.alert("Las contraseñas no coinciden"); }
                    }else{ window.alert("Ingrese la contraseña actual"); }
                });
            }
        })
        .catch(error => {console.error('Error de la solicitud:', error);});
}
