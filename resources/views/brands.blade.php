<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')

<link rel="stylesheet" href="{{ asset('styles/brands.css') }}">

<div class="container">
    <!-- <div class="primario">

    </div>

    <div class="secundario">

    </div> -->
    <div class="izquierdo">
        <!-- <ul>
        <li><a href="{{route('inicio')}}"><i class="fa-solid fa-house"></i> Inicio</a></li>
        </ul> -->
      <div class="card">
    <!-- <p class="marca">Nombre Marca</p>
    <input class="texto" type="text" placeholder=" "> -->
    <div class="ocultar">
        <p class="marca" id="toggleButton">Nombre Marca <span id="flecha">&#x2192;</span></p>
        <input class="texto" type="text" placeholder=" ">
    </div>
    <div class="botones">
        <button class="boton boton-secundario">Filtrar</button>
        <button class="boton boton-secundario">Limpiar</button>
    </div>
  </div>
    </div> 



    <div class="Productscategoria">
    <div class="superior">
    <div class="titulo"><h2>Marcas</h2>
    </div>    
    <div class="orden">
    <select class="select2">
        <option>Nombre (A-Z)</option>
        </select>
    </div>
    
</div>
    <div class="inferior">
    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/marca1.png') }}" alt="marcas">
            </div>
            <div class="infoProducto">
               <h4>intel</h4>
               
            </div>
             
    </div>

    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/marca2.jpg') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
               <h4>Ryzen</h4>
               
            </div>
            
    </div>


    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/marca3.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
                <h4>Redragon</h4>
               
            </div>
            
    </div>


    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/marca2.jpg') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
                <h4>Ryzen</h4>
               
            </div>
           
    </div>

    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/marca5.jpg') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
                <h4>Asus</h4>
                
            </div>
           
    </div>

    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/marca6.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
               <h4>Kingston</h4>
               
            </div>
           
    </div>

    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/marca7.jpg') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
                <h4>Acer</h4>
               
            </div>
          
    </div>

    <div class="itemsProduct">
           <div class="imgProducts">
                <img src="{{ asset('IMG/marca1.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
                <h4>Intel</h4>
              
            </div>
           
    </div>

    </div>
    <!-- <span></span><span></span><span></span> -->

    </div>
</div>
<br>

<script src="{{ asset('js/brands.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection
