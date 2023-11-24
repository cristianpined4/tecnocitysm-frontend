<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')

<div class="container">
    <h1>MONITORES</h1>

    <div class="Productscategoria">

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Monitor1.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5> MONITOR SAMSUNG CURVADO / 23.5 " / LC24F390FHNXZA</h5>
                    <h6>$169.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Monitor2.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5>MONITOR DELL E1920H/ 18.5"/ VGA DP</h5>
                    <h6>$119.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Monitor3.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5>MONITOR LG UHD 4K 32UN500-W / 31.5"</h5>
                    <h6>$368.99</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Monitor4.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5>Monitor Samsung Odyssey Ark LS55BG970NNXGO Quantum Mini Led Curved 55 Pulgadas Negro</h5>
                    <h6>$2,799.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Monitor5.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> Monitor Acer KG243YHBMIX LED 23.8" Full HD Negro</h5>
                    <h6>$149.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Monitor6.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5>  MONITOR GIGABYTE GAMER G24F-2, RESOLUCION 1920 x 1080, 165HZ, HDMI, DISPLAY PORT</h5>
                    <h6>$249.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Monitor7.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> MONITOR GAMING COOLER MASTER GM27-CF/ 27´/ FHD/ DP-HDMI/ CMI-GM27-CF-US</h5>
                    <h6>$399.01</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Monitor8.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> MONITOR XIAOMI 23,8" FHD 1920X1080/ IPS/ 60HZ</h5>
                    <h6>$175.00 </h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

    </div>
</div>
<br> <br>

@endsection
