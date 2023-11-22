const registro = document.getElementById("registro");

registro.addEventListener("click", () =>{
    const name = document.getElementById("nombre");
    const apellido = document.getElementById("apellido");
    const nombreComleto = name.value + ' '+ apellido.value;
    const correo = document.getElementById("email");
    const passwordF = document.getElementById("password");
    const passwordS = document.getElementById("confirmar_contrasena");

    if(passwordF.value !== passwordS.value){
        window.alert("Las contraseñas no coinciden");
        return;
    }

    if(passwordF.value.length < 8){
        window.alert("La contraseña debe contener mínimo 8 caracteres");
        return;
    }

    let symbolsString = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(passwordF.value);

    if(!symbolsString){
        window.alert("la contraseña debe contener por lo menos un símbolo");
        return;
    }

    console.log("Realizando petición...");
    const formData = new FormData();
    formData.append('name',nombreComleto);
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
                window.alert("registrado");
                window.location.href="http://localhost:8001/inicio"
            } else {
                window.alert("El correo ya se encuentra en existencia, intente con uno diferente");
                console.log("Error en la solicitud:", data.message);
            }
        })
        .catch(error => console.log('Error', error));
});
