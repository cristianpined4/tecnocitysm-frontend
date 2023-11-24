@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')

<div class="container">
    <h1>GAMING</h1>

    <div class="Productscategoria">
        <h2>CONSOLAS</h2>
        <span></span><span></span><span></span>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Consola1.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5>Consola Nintendo Switch Switch Oled The Legend of Zelda Tears of the Kingdom</h5>
                    <h6>$549.99</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Consola2.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5>Bundle Consola PlayStation®5 – EA SPORTS FC™ 24</h5>
                    <h6>$859.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Consola3.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5>Playstation 4 slim 1TB</h5>
                    <h6>$609.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Consola4.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> Consola Xbox Series X/S Xbox Series X</h5>
                    <h6>$849.99</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <h2>TECLADOS Y MOUSE</h2>
         <span></span><span></span><span></span>

         <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/tecladoymouse1.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> Teclado Mecánico Redragon Ratri K595 RGB Gaming BLUE Switches</h5>
                    <h6>$ 49.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/tecladoymouse2.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> TECLADO GAMING USB COOLER MASTER CK550 V2</h5>
                    <h6>$107.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/tecladoymouse3.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> TECLADO MECANICO DE METAL MEETION MK20 RED ANTI-GHOSTING RGB</h5>
                    <h6>$87.30</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/tecladoymouse4.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> Mouse Redragon M612 Predator RGB Gaming 8000 DPI software</h5>
                    <h6>$ 14.99</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/tecladoymouse5.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> MOUSE GAMING MEETION M915</h5>
                    <h6>$9.90</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/tecladoymouse6.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> MOUSE GAMING LOGITECH USB G203 LIGHTSYNC BLUE 910-005792</h5>
                    <h6>$24.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <span></span><span></span>

        <h2>SILLAS GAMER</h2>
         <span></span><span></span><span></span>

         <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/silla1.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> SILLA DE OFICINA ERGONOMICA FANTECH OC-A258WH MINT</h5>
                    <h6>$155.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>


        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/silla2.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> SILLA GAMER NEGRO VERDE MEETION MT-CHR22</h5>
                    <h6>$235.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>


        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/silla3.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> Silla Gamer XC3 ThunderX3 125kg/275lbs Ember Red</h5>
                    <h6>$ 249.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/silla4.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> Silla Gamer T-Dagger Mustang - Negro/Rojo Base Metalica - Descansa-brazos ajustables - Reclinable T-TC700RD</h5>
                    <h6>$ 149.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

    </div>
</div>
<br> <br>
@endsection
