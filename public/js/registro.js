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
        const formData = new FormData();
        formData.append('name',nombreComleto);
        formData.append('email',correo.value);
        formData.append('password',contraseñaF.value);
        fetch('http://localhost:8000/api/auth/signup',{
            method:'POST',
            body: formData
        })
         .then(response =>response.json())
         .then(data =>{
            if (data.success) {
                // Solo almacenar el token si la solicitud fue exitosa
                localStorage.removeItem("token")
                localStorage.setItem("token", JSON.stringify(data.access_token));
                console.log("Token almacenado en localStorage:", data.access_token);
                // Puedes realizar otras acciones después de almacenar el token si es necesario
                window.location.href="http://localhost:8001/inicio"
            } else {
                console.log("Error en la solicitud:", data.message);
                // Manejar el error según sea necesario
            }
         })
         .catch(error => console.log('Error', error));
    }else{
        window.alert("las contraseñas no coinciden");
    }
});