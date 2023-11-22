let tok = localStorage.getItem('token').slice(1, -1);
    const requestOptions = {
        method: 'GET',
        headers: {
          'Authorization': `Bearer ${tok}`
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
          if(JSON.stringify(data.rol_id) == "2"){
            window.alert("no es posible acceder al panel de administración")
            window.location.href="http://localhost:8001/inicio";
          }
        })
        .catch(error => {
          // Manejar errores de la solicitud
          console.error('Error de la solicitud:', error);
        });
//Definimos las constantes a emplear
const menu = document.getElementById('menu');
const barrasMenu = document.getElementById('barrasMenu');

barrasMenu.addEventListener('click', () =>{
    menu.classList.toggle('activado');

    });


const salir = document.getElementById("exit");
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
          window.alert("ocurre un error con la petición");
          window.location.href="http://localhost:8001/dashboard";
        });
});