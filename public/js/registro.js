const registro = document.getElementById("registro");

registro.addEventListener("click", () =>{
    const name = document.getElementById("nombre");
    const apellido = document.getElementById("apellido");
    const nombreComleto = name.value + ' '+ apellido.value;
    const correo = document.getElementById("email");
    const contraseñaF = document.getElementById("password");
    const contraseñaS = document.getElementById("confirmar_contrasena");
    if(contraseñaF.value == contraseñaS.value){
        console.log(contraseñaF.value.length);
        if(contraseñaF.value.length > 7){
            var tieneSimbolo = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(contraseñaF.value);
            if(!tieneSimbolo){
                window.alert("la contraseña debe contener por lo menos un simbolo");
            }
            else{
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
                        window.alert("registrado");
                        // Puedes realizar otras acciones después de almacenar el token si es necesario
                        window.location.href="http://localhost:8001/inicio"
                    } else {
                        window.alert("El correo ya se encuentra en existencia, intente con uno diferente");
                        console.log("Error en la solicitud:", data.message);
                        // Manejar el error según sea necesario
                    }
                })
                .catch(error => console.log('Error', error));
            }
        }
        else{
            window.alert("Las contraseñas deben de contener minimo 8 caracteres");
        }
    }
    else{
        window.alert("Las contraseñas no coinciden");
    }
});