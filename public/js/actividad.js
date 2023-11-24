const registrar = document.getElementById("registrar");
const acceder = document.getElementById("acceder");
const salir = document.getElementById("salir");
const perfil = document.getElementById("perfil");
const closeSession = document.getElementById("closeSession");

if(localStorage.getItem("token")){
    if(registrar){
        registrar.classList.add("d-none");
    }
    if(acceder){
        acceder.classList.add("d-none");
    }
    if(salir){
        salir.classList.remove("d-none");
    }
    if(perfil){
        perfil.classList.remove("d-none");
    }
}
else{
    if(registrar){
        registrar.classList.remove("d-none");
    }
    if(acceder){
        acceder.classList.remove("d-none");
    }
    if(salir){
        salir.classList.add("d-none");
    }
    if(perfil){
        perfil.classList.add("d-none");
    }
}

closeSession.addEventListener("click",(event)=>{
    // event.preventDefault();
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
          localStorage.removeItem("token");
          window.location.href="http://localhost:8001/";
        })
        .catch(error => {
          // Manejar errores de la solicitud
          console.error('Error de la solicitud:', error);
        });
});
