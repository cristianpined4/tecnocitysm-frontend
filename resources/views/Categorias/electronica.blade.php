<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')

<div class="container">
    <h1>ELECTRONICA</h1>

    <div class="Productscategoria">

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Electronica1.png') }}" alt="Monitores"></div>
            <div class="infoProducto">
                    <h5>MULTITESTER DIGITAL SELECCIÓN MANUAL 600 VOLTIOS</h5>
                    <h6>$44.90</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Electronica2.png') }}" alt="Monitores"></div>
            <div class="infoProducto">
                    <h5>Osciloscopio de 100 MHz</h5>
                    <h6>$416.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Electronica3.png') }}" alt="Monitores"></div>
            <div class="infoProducto">
                    <h5>Multímetro compacto básico</h5>
                    <h6>$5.500</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Electronica4.png') }}" alt="Monitores"></div>
            <div class="infoProducto">
                    <h5>Arduino UNO R4 WiFi [ABX00087] - Renesas RA4M1 / ESP32-S3 - Wi-Fi, Bluetooth, USB-C, CAN, DAC, OP AMP, conector Qwiic, matriz LED de 12 x 8</h5>
                    <h6>$40.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Electronica5.png') }}" alt="Monitores"></div>
            <div class="infoProducto">
                    <h5> Arduino Uno – R3</h5>
                    <h6>$34.95</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Electronica6.png') }}" alt="Monitores"></div>
            <div class="infoProducto">
                    <h5>  Chanzon 50pcs 1W 10 Ω ohmios Película metálica Resistencia fija 0.01 ±1% Tolerancia 10R MF Agujero Pasante Resistencias Limitación de Corriente Rohs Certificados</h5>
                    <h6>$5.99</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Electronica7.png') }}" alt="Monitores"></div>
            <div class="infoProducto">
                    <h5> Cautín económico tipo lápiz de 35 Watts</h5>
                    <h6>$4.79</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Electronica8.png') }}" alt="Monitores"></div>
            <div class="infoProducto">
                    <h5> Cautín de estación profesional con control de temperatura y display marca Weller, de 70 Watts</h5>
                    <h6>$211.99</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

    </div>
</div>
<br> <br>

@endsection
