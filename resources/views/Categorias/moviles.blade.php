<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')

<div class="container">
    <h1>MOVILES</h1>

    <div class="Productscategoria">

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Moviles1.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5>Celular Apple iPhone 15 Pro Max 256 GB 6,7" Titanio Azul</h5>
                    <h6>$1,719.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Moviles2.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5>Celular Xiaomi Redmi Note 11 128GB 6,43' Azul Crepúsculo</h5>
                    <h6>$299.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Moviles3.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5>Celular Xiaomi PocoM5 128GB 6.58" Gris Oscuro</h5>
                    <h6>$249.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Moviles4.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> Celular Samsung S23 Ultra</h5>
                    <h6>$1,179.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Moviles5.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> Celular Samsung Galaxy Z Fold4 256 GB 7.6" Phantom Black</h5>
                    <h6>$2,099.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Moviles6.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5>  Celular Honor X6 64 GB 6.5" Ocean Blue</h5>
                    <h6>$119.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Moviles7.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5>  Celular Motorola G20 128 GB 6.5" Verde</h5>
                    <h6>$125.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Moviles8.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5>  Celular Huawei Nova Y61 64 GB 6.52" Azul</h5>
                    <h6>$109.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

    </div>
</div>
<br> <br>

@endsection
