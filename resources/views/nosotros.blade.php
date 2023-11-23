<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')
<link rel="stylesheet" href="{{ asset('styles/we.css') }}">
    <h1 class="text-center">TecnoCitySM</h1>
    <div class="contenedor">
        <div class="contenedorLogo">
            <img src="{{ asset('IMG/Logo.png') }}" alt="imagen" class="logotipo">
        </div>
        <div style="padding: 50px 20px 20px 20px">
            <h3>Busca, Escoje, Compra Fácil y rápido!</h3>
            <p>En nuestra webstore ponemos a disposición cientos de productos tecnológicos de fácil ubicación para ahorrarte tiempo. Un proceso de pago asistido de fácil comprensión para que tu experiencia de compra sea fácil y rápida. Además de ofrecerte novedades de productos cada semana y oportunidades de ofertas especiales de la semana o del mes.</p>
        </div>

        <div style="padding: 20px 20px 20px 60px">
            <h3>Marcas, categorias ...!</h3>
            <ul>
                <li>Entretenimiento</li>
                <li>Desarrollo</li>
                <li>Tecnologia</li>
            </ul>
            <p>En nuestra webstore ponemos a disposición cientos de productos tecnológicos de fácil ubicación para ahorrarte tiempo. Un proceso de pago asistido de fácil comprensión para que tu experiencia de compra sea fácil y rápida. Además de ofrecerte novedades de productos cada semana y oportunidades de ofertas especiales de la semana o del mes.</p>
        </div>
        <div class="contenedorLogo">
            <img src="{{ asset('IMG/imagen3.png') }}" alt="imagen" class="logotipo" style="border-radius: 25px;">
        </div>
    </div>
    <div>
        <br>
        <div class="colaboradoresContenedor">
        <span></span><h1 class="text-center">Colaboradores</h1><span></span>
        <hr><hr><hr>
            <div class="text-center">
                <img src="{{ asset('IMG/imgFrontend.png') }}" alt="programador Backend" id="backend">
                <h4>John Elvis Arbaiza</h4>
                <a href="https://github.com/JohnArbaiza1">Frontend</a>
            </div>
            <div class="text-center">
                <img src="{{ asset('IMG/imgFrontend.png') }}" alt="programador Backend" id="backend">
                <h4>Andres Isai</h4>
                <a href="https://github.com/Andre1717g">Frontend</a>
            </div>
            <div class="text-center">
                <img src="{{ asset('IMG/imgFrontend.png') }}" alt="programador Backend" id="backend">
                <h4>Erick Adony Lopez</h4>
                <a href="https://github.com/lm21009UES">Frontend</a>
            </div>
            <div class="text-center">
                <img src="{{ asset('IMG/imgBackend.png') }}" alt="programador Backend" id="backend">
                <h4>Hugo Alexander Ulloa</h4>
                <a href="https://github.com/alexus21">Backend</a>
            </div>
            <div class="text-center">
                <img src="{{ asset('IMG/imgBackend.png') }}" alt="programador Backend" id="backend">
                <h4>Angel Gabriel</h4>
                <a href="https://github.com/yurdeth">Backend</a>
            </div>
            <div class="text-center">
                <img src="{{ asset('IMG/imgBackend.png') }}" alt="programador Backend" id="backend">
                <h4>Cristian Pineda</h4>
                <a href="https://github.com/cristianpined4">Backend</a>
            </div>
            <hr><hr><hr>
        </div>
    </div>
@endsection
