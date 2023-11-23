<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')

<link rel="stylesheet" href="{{ asset('styles/categorias.css') }}">

<div class="container">

<h1>COMPONENTES</h1>

    <div class="Productscategoria">
    <h2>CASE Y GABINETES</h2>
    <span></span><span></span><span></span>

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

    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/Products/case5.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
                <h5>CASE EAGLE WARRIOR THRONE CG03R</h5>
                <h6>$98.00</h6>
            </div>
            <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
            <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
    </div>

    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/Products/case6.jpeg') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
                <h5> CASE COOLER MASTER MASTERBOX <br>K501L RGB, COLOR NEGRO.</h5>
                <h6>$119.00</h6>
            </div>
            <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
            <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
    </div>

    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/Products/case7.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
                <h5>CASE GAMER CORSAIR 470T RGB CC-9011215-WW</h5>
                <h6>$110.00</h6>
            </div>
            <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
            <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
    </div>

    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/Products/case8.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
                <h5>CASE COOLER MASTER Q500L MCB-Q500L-KANN-S00</h5>
                <h6>$89.00</h6>
            </div>
            <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
            <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
    </div>

    <h2>FUENTES DE PODER</h2>
    <span></span><span></span><span></span>

    <div class="itemsProduct">
       <div class="imgProducts">
            <img src="{{ asset('IMG/Products/fuente1.png') }}" alt="Componentes">
        </div>
        <div class="infoProducto">
            <h5>FUENTE DE PODER GIGABYTE GP- P650B 80 PLUS BRONCE 650W</h5>
            <h6>$84.00</h6>
        </div>
           <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
           <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
    </div>

    <div class="itemsProduct">
       <div class="imgProducts">
            <img src="{{ asset('IMG/Products/fuente2.png') }}" alt="Componentes">
        </div>
        <div class="infoProducto">
            <h5>FUENTE DE PODER AZZA PSAZ-650W 650 WATT 80 PLUS BRONZE 650WB</h5>
            <h6>$65.00</h6>
        </div>
        <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
        <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
    </div>

    <div class="itemsProduct">
       <div class="imgProducts">
            <img src="{{ asset('IMG/Products/fuente3.png') }}" alt="Componentes">
        </div>
        <div class="infoProducto">
            <h5>FUENTE DE PODER FIVESTAR PS-10-600W BULK</h5>
            <h6>$21.90</h6>
        </div>
        <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
        <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
    </div>

    <div class="itemsProduct">
       <div class="imgProducts">
            <img src="{{ asset('IMG/Products/fuente4.png') }}" alt="Componentes">
        </div>
        <div class="infoProducto">
            <h5> FUENTE DE PODER EAGLE WARRIOR BLACK 600W PK600RSF001X</h5>
            <h6>$39.00</h6>
        </div>
        <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
        <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
      </div>

   <h2>ENFRIAMIENTO</h2>
    <span></span><span></span><span></span>

    <div class="itemsProduct">
            <div class="imgProducts">
                <img src="{{ asset('IMG/Products/Disipador1.png') }}" alt="Componentes">
             </div>
             <div class="infoProducto">
                 <h5>DISIPADOR DE AIRE ANTEC A400 RAINBOW INTEL AMD</h5>
                  <h6>$49.95</h6>
            </div>
              <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
             <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

    <div class="itemsProduct">
            <div class="imgProducts">
                <img src="{{ asset('IMG/Products/Disipador2.png') }}" alt="Componentes">
             </div>
             <div class="infoProducto">
                 <h5>DISIPADOR DE AIRE ANTEC A400I RAINBOW PARA INTEL AMD</h5>
                  <h6>$39.00</h6>
            </div>
              <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
             <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

    <div class="itemsProduct">
            <div class="imgProducts">
                <img src="{{ asset('IMG/Products/Disipador3.png') }}" alt="Componentes">
             </div>
             <div class="infoProducto">
                 <h5>DISIPADOR COOLER MASTER HYPER H410R RGB RR-H410-20PC-R1</h5>
                  <h6>$45.00</h6>
            </div>
              <button class="add-carrito"><i class="fa-solid fa-cart-shopping"></i> Agregar</button>
             <button><i class="fa-solid fa-bookmark"></i> Guardar</button>
        </div>

    </div>
</div>
<br>


@endsection
