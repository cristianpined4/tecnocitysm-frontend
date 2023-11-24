<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/Responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/categorias.css') }}">
    <script type="text/javascript" src="{{ asset('js/Carrito.js') }}" defer></script>
    <title>TecnoCitySM</title>
</head>
<body>
    <header>
        <ul class="opciones1">
            <li><a href="http://localhost:8001/nosotros"><i class="fa-solid fa-users"></i></i> Nosotros</a></li>
            <li><a href=""><i class="fa-solid fa-headset"></i> Centro de ayuda</a></li>
            <li><a href=""><i class="fa-solid fa-money-bill"></i> Pagar</a></li>
        </ul>

        <div class="carretilla" id="carretilla">
            <div class="carretilla-icon" id="carretilla-icon">
               <i class="fa-solid fa-cart-shopping"></i>
               <div class="count">
                  <span id="contadorProducts">0</span>
                </div>
            </div>

            <div class="containerProducts hidden-card">
                <div class="row-product">
                  <div class="cardProduct">
                      <div class="productinfo-carrito">
                          <span class="cantidad"></span>
                          <p class="ProductoCarInfo"></p>
                          <span class="Precio"></span>
                      </div>
                    <i class="fa-solid fa-square-xmark"></i>
                   </div>
                </div>
                <div class="total">
                    <h4>Total:</h4>
                    <span class="totalPagar">$0</span>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <img class="logo" src="{{ asset('IMG/Logo.png') }}" alt="imagen">
          <span class="text-light"><i class="fa-solid fa-phone-volume"></i> Llamanos </span>

            <form class="d-flex Buscador mb-2 input-group" role="search">
               <input type="text" class="form-control" placeholder="Ingrese su búsqueda" aria-describedby="button-addon2">
               <button class="busqueda btn btn-outline-secondary text-light" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
           </form>
               <ul class="navbar-nav">
                    <li><a id="registrar" class="nav-link active text-light" aria-current="page" href="http://localhost:8001/register"><i class="fa-solid fa-mobile-screen-button"></i> Registrarse</a></li>
                    <li><a id="acceder" class="nav-link active text-light" aria-current="page" href="http://localhost:8001/login"><i class="fa-solid fa-arrow-right-from-bracket"></i> Acceder</a></li>
                    <li><a id="salir" class="nav-link active text-light d-none" aria-current="page" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-sign-out"></i>Salir</a></li>
                    <li><a id="perfil" class="nav-link active text-light d-none" aria-current="page" href="http://localhost:8001/profile"><i class="fa fa-user-circle"></i> Mi Perfil</a></li>
                </ul>
           </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Seguro que deseas salir?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger" id="closeSession">Cerrar sesión</button>
                    </div>
                </div>
            </div>
        </div>

    </nav>
    <div class="Categorias">
        <ul class="op">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-bars"> </i> Categoria
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost:8001/componentes">Componentes</a></li>
            <li><a class="dropdown-item" href="#">Computo</a></li>
            <li><a class="dropdown-item" href="#">Gaming</a></li>
            <li><a class="dropdown-item" href="#">Audio y Sonido</a></li>
            <li><a class="dropdown-item" href="#">Moviles</a></li>
            <li><a class="dropdown-item" href="#">Impresoras</a></li>
            <li><a class="dropdown-item" href="#">Electrónica</a></li>
            <li><a class="dropdown-item" href="#">Oficina</a></li>
            <li><a class="dropdown-item" href="#">Más</a></li>
          </ul>
        </li>

        </ul>
     <ul class="Opciones2">
        <li><a href="{{route('inicio')}}"><i class="fa-solid fa-house"></i> Inicio</a></li>
        <li><a href=""><i class="fa-solid fa-tag"></i> Marcas</a></li>
        <li><a href="http://localhost:8001/ofertas"><i class="fa-brands fa-shopify"></i> Ofertas</a></li>
        <li><a href=""><i class="fa-solid fa-plus"></i> Nuevos productos</a></li>
        <li><a href=""><i class="fa-solid fa-newspaper"></i> Noticias</a></li>
        <li><a href=""><i class="fa-solid fa-store"></i> Tiendas</a></li>
     </ul>
    </div>

    {{-- Contenido de la pagina --}}
    @yield('content')

    <!--Parte del footer de Inicio,Login,Registro-->
    <footer>
     <h3>TecnoCitySM</h3>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/actividad.js') }}"></script>
</body>
</html>
