<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')

<link rel="stylesheet" href="{{ asset('styles/ofertas.css') }}">

<div class="container">

  <div class= "izquierdo" ></div>
    <div class="Productscategoria">
    <div class="superior">
    <div class="titulo"><h2>Ofertas Especiales</h2>
    </div>    
    <div class="orden">
    <select class="select2">
        <option>Nombre (A-Z)</option>
        <option>Nombre (Z-A)</option>
        <option>Mayor Precio</option>
        <option>Menor Precio</option>
        </select>
    </div>
    
</div>
    <div class="inferior">
    <div class="itemsProduct">
    <button class="ofertabtn colorboton">oferta</button>
           <div class="imgProducts">
           <img src="{{ asset('IMG/Products/Consola2.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
               <p>Bundle Consola PlayStation®5 - EA SPORTS FC™ 24</p>
        <div class="precios">
          <p class="precios1">$765.00</p>
          <p class="precios2">$859.00</p>
        </div>
      </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
           <img src="{{ asset('IMG/Products/Consola3.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
               <p>Playstation 4 slim 1TB</p>
        <div class="precios">
          <p class="precios1">$500.00</p>
          <p class="precios2">$609.00</p>
        </div>
      </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
           <img src="{{ asset('IMG/Products/Consola4.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
               <p>Consola Xbox Series X/S Xbox Series X</p>
        <div class="precios">
          <p class="precios1">$790.99</p>
          <p class="precios2">$849.99</p>
        </div>
      </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
           <img src="{{ asset('IMG/Products/Electronica2.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
               <p>Osciloscopio de 100 MHz</p>
        <div class="precios">
          <p class="precios1">$340.00</p>
          <p class="precios2">$416.00</p>
        </div>
        </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
           <img src="{{ asset('IMG/Products/Accesorio6.jpg') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
               <p>Cable HDMI® reforzado, de 1,8 m<</p>
        <div class="precios">
          <p class="precios1">$3.00</p>
          <p class="precios2">$5.75</p>
          </div>
        </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
           <img src="{{ asset('IMG/Products/Monitor1.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
               <p>MONITOR SAMSUNG CURVADO </p>
        <div class="precios">
          <p class="precios1">149.00</p>
          <p class="precios2">$169.00</p>
        </div>
      </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
           <img src="{{ asset('IMG/Products/Monitor3.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
               <p>MONITOR DELL E1920H/ 18.5"/ VGA DP</p>
        <div class="precios">
          <p class="precios1">$105.00</p>
          <p class="precios2">$119.00</p>
        </div>
      </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
           <img src="{{ asset('IMG/Products/Moviles4.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
               <p>Celular Samsung S23 Ultra</p>
        <div class="precios">
          <p class="precios1">$1,100.99</p>
          <p class="precios2">$1,179.00</p>
        </div>
        </div>   
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
           <img src="{{ asset('IMG/Products/Moviles1.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
               <p>Celular Apple iPhone 15 Pro Max 256 GB 6,7" Titanio Azul</p>
        <div class="precios">
          <p class="precios1">$1,500.00</p>
          <p class="precios2">$1,750.00</p>
        </div>
      </div>
    </div>


    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
           <img src="{{ asset('IMG/Products/Moviles5.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
               <p>Celular Samsung Galaxy Z Fold4 256 GB 7.6" Phantom </p>
        <div class="precios">
          <p class="precios1">$1,889.00</p>
          <p class="precios2">$2,099.00</p>
        </div>
      </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
           <img src="{{ asset('IMG/Products/Moviles7.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
               <p>Celular Motorola G20 128 GB 6.5" Verde</p>
        <div class="precios">
          <p class="precios1">$115.00</p>
          <p class="precios2">$125.00</p>
        </div>
      </div>
    </div>

    <div class="itemsProduct">
    <button class="ofertabtn">oferta</button>
           <div class="imgProducts">
           <img src="{{ asset('IMG/Products/Laptop3.png') }}" alt="Componentes">
            </div>
            <div class="infoProducto">
               <p>Laptop Gaming HP 15FA0000LA  16GB 512GB 15.6" Azul<</p>
        <div class="precios">
          <p class="precios1">$889.00</p>
          <p class="precios2">$929.00</p>
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