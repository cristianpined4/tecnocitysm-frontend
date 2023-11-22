const registro = document.getElementById("registro");

registro.addEventListener("click", () =>{
    const name = document.getElementById("nombre");
    const apellido = document.getElementById("apellido");
    const nombreCompleto = name.value + ' '+ apellido.value;
    const correo = document.getElementById("email");
    const passwordF = document.getElementById("password");
    const passwordS = document.getElementById("confirmar_contrasena");
    if (passwordF.value === passwordS.value) {
        console.log("realizando peticion");
        const formData = new FormData();
        formData.append('name',nombreCompleto);
        formData.append('email',correo.value);
        formData.append('password',passwordF.value);
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
