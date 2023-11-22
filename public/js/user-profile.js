if(localStorage.getItem("token") !== null){

    const token = localStorage.getItem('token').slice(1, -1);
    const txtNameField = document.getElementById("nombre");
    const txtUsernameField = document.getElementById("username");
    const txtEmailField = document.getElementById("email");

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

}else{
    window.location.href="http://localhost:8001/login/";
}
