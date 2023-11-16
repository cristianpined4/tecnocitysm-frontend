<!--Incluimos el header-->
 @include('header')

 <!--Contenido de la pagina-->
 <div class="container">
        <div>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="{{ asset('IMG/Imagen1.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="{{ asset('IMG/Imagen2.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="{{ asset('IMG/Imagen3.png') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
           </div>
       </div>
       <div class="productos">
           <div class="imagenes">
           <img class="product" src="{{ asset('IMG/productos.png') }}" alt="imagen">
           </div>
           <div class="imagenes">
           <img class="product" src="{{ asset('IMG/Productos2.png') }}" alt="imagen">
           </div>
           <div class="imagenes">
           <img class="product" src="{{ asset('IMG/Productos3.png') }}" alt="imagen">
           </div>
       </div>
 </div>

 <div class="container2">
    <ul class="info">
        <li><i class="fa-solid fa-truck"></i> ENVIO GRATIS <br><p class="info2">Pedidos superior a $150.00 en toda la zona oriental</p></li>
        <li><i class="fa-solid fa-hand-holding-dollar"></i> GARANTÍAS <br> <p class="info2">Respuesta inmediata en garantías</p></li>
        <li><i class="fa-solid fa-credit-card"></i> TARJETAS CRÉDITO/DÉBITO <br> <p class="info2">Aceptamos todas las tarjetas de Crédito</p></li>
        <li><i class="fa-brands fa-shopify"></i> OFERTAS DE TEMPORADA <br> <p class="info2">Dandote lo mejor en las fechas más especiales</p></li>
        <li><i class="fa-solid fa-headset"></i> SOPORTE TÉCNICO <br> <p class="info2">De lunes a Sábado de 9am-5pm</p></li>
    </ul>
 </div>
<br>
 <!--Incluimos el footerr-->
 @include('footer')

