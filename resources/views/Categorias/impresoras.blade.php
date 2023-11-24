<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')

<div class="container">
    <h1>IMPRESORAS</h1>

    <div class="Productscategoria">

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Impresora1.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5>IMPRESOR CANON PIXMA G3160 MEGATANK COLOR - BN</h5>
                    <h6>$235.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Impresora2.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5>Impresora HP Smart Tank multifuncional 580 Negro-blanco</h5>
                    <h6>$185.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Impresora3.png') }}" alt="Gaming"></div>
            <div class="infoProducto">
                    <h5>Impresora HP Smart Tank multifuncional 750 Negro-blanco</h5>
                    <h6>$355.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Impresora4.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> IMPRESORA MULTIFUNCIONAL EPSON ECOTANK L3250</h5>
                    <h6>$239.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Impresora5.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> IMPRESORA HP LASERJET PRO M203DW G3Q47A#BGJ</h5>
                    <h6>$230.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Impresora6.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5>  Impresora multifuncional HP DeskJet Ink Advantage 2775 Inkjet WiFi Blanco</h5>
                    <h6>$55.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

        <div class="itemsProduct">
            <div class="imgProducts"> <img src="{{ asset('IMG/Products/Impresora7.png') }}" alt="Computo"></div>
            <div class="infoProducto">
                    <h5> Impresora EPSON L1250 Inyección de Tinta Wi-Fi Negro</h5>
                    <h6>$139.00</h6>
            </div>
                <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
                <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

    </div>
</div>
<br> <br>

@endsection
