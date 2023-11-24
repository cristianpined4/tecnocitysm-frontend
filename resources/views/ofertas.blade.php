<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')

<link rel="stylesheet" href="{{ asset('styles/ofertas.css') }}">

<div class="container">
    <div class="izquierdo">
      <div class="card">
    <div class="ocultar">
        <p class="marca" id="toggleButton">Nombre Marca <span id="flecha">&#x2192;</span></p>
        <input class="texto" type="text" placeholder="Seleccionar ">
    </div>
    <div class="botones">
    <p class="Pre" id="togglePrice">Precio<span id="flechaPrice">&#x2192;</span></p>
    <span id="dollarCounter">$0.00</span>
    <input type="range" id="progressInput" min="0" max="100" value="0">
    </div>
  </div>
    </div> 

    <div class="Productscategoria">
    <div class="superior">
    <div class="titulo"><h2>Ofertas Especiales</h2>
    </div>    
    <div class="orden">
    <select class="select2">
        <option>Nombre (A-Z)</option>
        </select>
    </div>
    
</div>
    <div class="inferior">
    <div class="itemsProduct">
    <button class="ofertabtn colorboton">oferta</button>
           <div class="imgProducts">
                <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
            </div>
            <div class="infoProducto">
               <p>teclado</p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
      </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
                <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
            </div>
            <div class="infoProducto">
               <p>teclado</p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
      </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
                <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
            </div>
            <div class="infoProducto">
               <p>teclado</p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
      </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
                <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
            </div>
            <div class="infoProducto">
               <p>teclado</p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
        </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
                <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
            </div>
            <div class="infoProducto">
               <p>teclado</p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
          </div>
        </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
                <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
            </div>
            <div class="infoProducto">
               <p>teclado</p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
      </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
                <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
            </div>
            <div class="infoProducto">
               <p>teclado</p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
      </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
                <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
            </div>
            <div class="infoProducto">
               <p>teclado</p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
        </div>   
    </div>
    </div>
  </div>
</div>
<br>

<script src="{{ asset('js/oferta.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection
