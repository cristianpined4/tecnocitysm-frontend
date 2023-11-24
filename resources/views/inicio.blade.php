<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')

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

                  <div class="carousel-item">
                     <img src="{{ asset('IMG/Imagen4.png') }}" class="d-block w-100" alt="...">
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



<div class="container3">
<h3><i class="fa-solid fa-magnifying-glass"></i> Las más buscadas</h3>
<hr>
    <div class="slider-marcas">
        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca1.png') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca2.jpg') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca3.png') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca4.png') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca5.jpg') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca6.png') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca7.jpg') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca8.png') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca1.png') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca2.jpg') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca3.png') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca4.png') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca5.jpg') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca6.png') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca7.jpg') }}" alt="imagen">
        </div>

        <div class="slide2">
           <img  src="{{ asset('IMG/Marcas/marca8.png') }}" alt="imagen">
        </div>
    </div>
    <hr>
    <br>

    <h3><i class="fa-solid fa-tag"></i> Ofertas Especiales</h3>
    <div  class="Productscategoria">
    <div class="ofertas">
           <div class="ofertas-img">
            <img  src="{{ asset('IMG/Products/Accesorio4.png') }}" alt="imagen">
            <div class="infoProducto">
                    <h5> SPLITTER HDMI 4K DE 4 PUERTOS ARGOM ARG-AV-5114</h5>
                    <h6>$21.00</h6>
            </div>
            <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
            <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
           </div>

           <div class="ofertas-img">
           <img src="{{ asset('IMG/Products/Accesorio1.png') }}" alt="imagen">
           <div class="infoProducto">
                    <h5>CARGADOR UNIVERSAL MAXELL ULC-100 PARA PORTATIL</h5>
                    <h6>$32.60</h6>
            </div>
            <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
            <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
           </div>

           <div class="ofertas-img">
           <img  src="{{ asset('IMG/Products/Monitor7.png') }}" alt="imagen">
           <div class="infoProducto">
                    <h5> MONITOR GAMING COOLER MASTER GM27-CF/ 27´/ FHD/ DP-HDMI/ CMI-GM27-CF-US</h5>
                    <h6>$399.01</h6>
            </div>
            <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
            <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
           </div>

           <div class="ofertas-img">
             <img src="{{ asset('IMG/Products/Monitor1.png') }}" alt="">
             <div class="infoProducto">
                    <h5> MONITOR SAMSUNG CURVADO / 23.5 " / LC24F390FHNXZA</h5>
                    <h6>$169.00</h6>
            </div>
             <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
            <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
           </div>

           <div class="ofertas-img">
             <img src="{{ asset('IMG/Products/Case5.png') }}" alt="">
             <div class="infoProducto">
                <h5>CASE EAGLE WARRIOR THRONE CG03R</h5>
                <h6>$98.00</h6>
            </div>
             <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
             <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
           </div>
       </div>
       </div>
       <hr>

       <h3><i class="fa-solid fa-money-bill"></i> Más Vendido</h3>
       <div  class="Productscategoria">

       <div class="ventas">
           <div class="ventas-img">
           <img  src="{{ asset('IMG/Products/Case2.png') }}" alt="imagen">
           <div class="infoProducto">
                <h5>CASE GAMER CORSAIR CARBIDE SERIES SPEC-DELTA <br>RGB CC-9011166-WW RGB</h5>
                <h6>$110.00</h6>
            </div>
           <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
            <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
           </div>

           <div class="ventas-img">
           <img src="{{ asset('IMG/Products/Disco1.jpeg') }}" alt="imagen">
           <div class="infoProducto">
                    <h5> DISCO SOLIDO SSD KINGSTON 240GB A400 SA400S37/240G</h5>
                    <h6>$24.95</h6>
            </div>
            <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
            <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
           </div>

           <div class="ventas-img">
           <img  src="{{ asset('IMG/Products/Laptop3.png') }}" alt="imagen">
           <div class="infoProducto">
                    <h5> Laptop Gaming HP 15FA0000LA  16GB 512GB 15.6" Azul</h5>
                    <h6>$929.00</h6>
            </div>
            <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
            <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
           </div>

           <div class="ventas-img">
               <img src="{{ asset('IMG/Products/memoria3.png') }}" alt="">
               <div class="infoProducto">
                    <h5> MEMORIA RAM FURY BEAST RGB DDR4 16GB 3200MHZ CL16 UDIMM RGB KF432C16BBA/16</h5>
                    <h6>$39.10</h6>
               </div>
               <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
               <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
           </div>

           <div class="ventas-img">
               <img src="{{ asset('IMG/Products/tecladoymouse1.png') }}" alt="">
               <div class="infoProducto">
                    <h5> Teclado Mecánico Redragon Ratri K595 RGB Gaming BLUE Switches</h5>
                    <h6>$ 49.00</h6>
                </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
           </div>
        </div>

       </div>
       </div>

</div>

<br><br>

@endsection
