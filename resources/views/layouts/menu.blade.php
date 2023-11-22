<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard TecnoCitySM </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('styles/dashboard.css') }}">
    <script type="text/javascript" src="{{ asset('js/menu.js') }}" defer></script>

  </head>
  <body>
    <!--navbar Vertical-->
    <nav class="menu" id="menu">
        <div class="head">
            <div class="logo">
             <img  src="{{ asset('IMG/LOGO2.png') }}" alt="Logo">
            </div>
           <i class="fa-solid fa-bars" id="barrasMenu"></i>
        </div>

        <div class="opciones">
            <div>
                <i class="fa-regular fa-clipboard"></i>
                <span class="opcion {{ 'dashboard' == request() ->path()?'active':''  }}">
                    <a href="{{ url('/dashboard') }} ">Dashboard</a>
                </span>
            </div>

            <div class="{{ 'user' ==Request::is('user*')?'active':'' }}">
               <i class="fa-solid fa-users"></i>
               <span class="opcion"><a href="{{ route('user.index') }}"> Usuarios</a></span>
            </div>

            <div class="{{ 'productos' ==Request::is('productos*')?'active':'' }}">
               <i class="fa-solid fa-desktop"></i>
               <span class="opcion"><a href="{{ route('productos.index') }}"> Productos</a></span>
            </div>

            <div>
               <i class="fa-solid fa-bars"> </i>
               <span class="opcion"><a href="{{ route('categoria.index')}}">Categorias</a></span>
            </div>

            <div>
               <i class="fa-solid fa-tag"></i>
               <span class="opcion"><a href="{{ route('marcas.index')}}"> Marcas </a></span>
            </div>

            <div>
                <i class="fa-brands fa-shopify"></i>
                <span class="opcion"><a href="{{ route('oferta.index')}}">Ofertas</a></span>
            </div>
        </div>
    </nav>

    <!--navbar horizontal-->
    <div class="menu-horizontal">
            <div class="op">
                <i class="fa-solid fa-user"></i>
                <span>Admin</span>
            </div>

            <div class="op">
            <a href="" id="exit" type="button"><i class="fa-solid fa-right-from-bracket"></i></a>
                <span>Salir</span>
            </div>

            <div class="op">
                <i class="fa-solid fa-house"></i>
                <span>Home</span>
            </div>
    </div>

    <!--Contenidos-->
    <div class="container">
       @yield('contenido')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
