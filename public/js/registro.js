const registro = document.getElementById("registro");

registro.addEventListener("click", () =>{
    const name = document.getElementById("nombre");
    const apellido = document.getElementById("apellido");
    const nombreComleto = name.value + ' '+ apellido.value;
    const correo = document.getElementById("email");
    const contraseñaF = document.getElementById("password");
    const contraseñaS = document.getElementById("confirmar_contrasena");
    if (contraseñaF.value == contraseñaS.value) {
        console.log("realizando peticion");
        var datos = {
            name: nombreComleto,
            email: correo,
            password: contrasenia
        };
        axios.post('http://localhost:8001/api/auth/signUp', datos)
            .then(function (response) {
                // Maneja la respuesta del servidor
                console.log(response.data);
            })
            .catch(function (error) {
                // Maneja los errores de la solicitud
                console.error('Error:', error);
            });
    }else{
        window.alert("las contraseñas no coinciden");
    }
});