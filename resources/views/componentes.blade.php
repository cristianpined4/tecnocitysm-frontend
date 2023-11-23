<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')

<link rel="stylesheet" href="{{ asset('styles/categorias.css') }}">

<div class="container">

<h1>CASE Y GABINETES</h1>

    <div class="Productscategoria">

    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/Products/Case1.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
                <h5>CASE GAMER ATX MEDIA TORRE <br> DELIRIUM XTECH GMR1</h5>
                <h6>$60.00</h6>
            </div>
               <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
               <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
    </div>

    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/Products/Case2.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
                <h5>CASE GAMER CORSAIR CARBIDE SERIES SPEC-DELTA <br>RGB CC-9011166-WW RGB</h5>
                <h6>$110.00</h6>
            </div>
            <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
            <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
    </div>


    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/Products/case3.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
                <h5>CASE FANTECH CG80 SAKURA EDITION <br>ATX/MINI ITX/ MICRO ATX</h5>
                <h6>$89.00</h6>
            </div>
            <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
            <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
    </div>


    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/Products/case4.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
                <h5>CASE GAMER DE MEDIA TORRE RGB AERO <br>CG80 SPACE EDITION WH</h5>
                <h6>$89.00</h6>
            </div>
            <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
            <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
    </div>


   </div>

</div>
<br>


@endsection
