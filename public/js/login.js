if (localStorage.getItem('token') !== null) {
    // Hay un token en el localStorage
    let token = localStorage.getItem('token').slice(1, -1);
    console.log(token);
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
          console.log(data);
          window.alert("Seseion ya iniciada como -> "+JSON.stringify(data.name))
          window.location.href="http://localhost:8001/inicio";
        })
        .catch(error => {
          // Manejar errores de la solicitud
          console.error('Error de la solicitud:', error);
        });

} else {
    // No hay un token en el localStorage
    console.log('No se encontró ningún token en el localStorage');
    const user = document.getElementById("usuario");
    const pass = document.getElementById("password");
    const boton = document.getElementById("Ingresar");
    boton.addEventListener("click", ()=>{
        const rut = "http://localhost:8000/api/auth/login?email="+user.value+"&password="+pass.value;
        axios.post(rut)
            .then(function (response) {
                // Maneja la respuesta del servidor
                console.log(response.data);
                const jsonresponse = response.data;
                localStorage.setItem("token", JSON.stringify(jsonresponse.access_token));
                window.location.href="http://localhost:8001/"
            })
            .catch(function (error) {
                // Maneja los errores de la solicitud
                console.error('Error:', error);
            });
    });
}