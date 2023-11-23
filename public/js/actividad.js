const registrar = document.getElementById("registrar");
const acceder = document.getElementById("acceder");
const salir = document.getElementById("salir");
const perfil = document.getElementById("perfil");
if(localStorage.getItem("token")){
    registrar.classList.add("d-none");
    acceder.classList.add("d-none");
    salir.classList.remove("d-none");
    perfil.classList.remove("d-none");
}
else{
    registrar.classList.remove("d-none");
    acceder.classList.remove("d-none");
    salir.classList.add("d-none");
    perfil.classList.add("d-none");
}

salir.addEventListener("click",()=>{
    event.preventDefault();
    let token = localStorage.getItem('token').slice(1, -1);
    console.log(token);
    const requestOptions = {
        method: 'GET',
        headers: {
          'Authorization': `Bearer ${token}`
        }
      };

      // Realizar la solicitud Fetch
      fetch('http://localhost:8000/api/auth/logout', requestOptions)
        .then(response => {
          if (!response.ok) {
            throw new Error(`Error: ${response.status}`);
          }
          return response.json();
        })
        .then(data => {
          // Manipular los datos de respuesta aquí
          console.log(data);
          window.alert("Sesion cerrada")
          localStorage.removeItem("token");
          window.location.href="http://localhost:8001/";

        })
        .catch(error => {
          // Manejar errores de la solicitud
          console.error('Error de la solicitud:', error);
        });
});
