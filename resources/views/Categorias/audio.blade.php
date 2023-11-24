<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')

<div class="container">
    <h1>AUDIO Y SONIDO</h1>

    <div class="Productscategoria">

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Audio1.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5>Parlantes gaming RadioShack Xplode 4001950 20 W Bluetooth Negro</h5>
                    <h6>$54.99</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Audio2.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5>AUDIFONOS CON MICROFONO USB CAPTAIN 7.1 FANTECH HG11</h5>
                    <h6>$45.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Audio3.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5>MICROFONO DE TRANSMISION PROFESIONAL FANTECH LEVIOSA MCX01 RGB</h5>
                    <h6>$52.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Audio4.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> MICROFONO DE TRANSMISION LOGITECH BLUE SNOWBALL 988-000067</h5>
                    <h6>$32.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Audio5.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> Parlante Portátil con Luces RadioShack 4001762 9W Bluetooth Negro</h5>
                    <h6>$18.99</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Audio6.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5>  AUDIFONOS CON MICROFONO VISAGE II FANTECH HG17S</h5>
                    <h6>$27.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

    </div>
</div>
<br> <br>

@endsection
