if(localStorage.getItem("id") !== "1" || !localStorage.getItem("id") || !localStorage.getItem("token")){
    window.location.href="http://localhost:8001/inicio";
} else{
    let tok = localStorage.getItem('token').slice(1, -1);
    //Definimos las constantes a emplear
    const menu = document.getElementById('menu');
    const barrasMenu = document.getElementById('barrasMenu');

    barrasMenu.addEventListener('click', () =>{
        menu.classList.toggle('activado');

    });

    const closeSession = document.getElementById("closeSession");
    closeSession.addEventListener("click",(event)=>{
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
}
