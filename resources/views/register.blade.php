<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('styles/register.css') }}">
        <div id="contenedor">

            <div id="contenedorcentrado">
                <div id="register">
                    <form action="{{ route('registro') }}" method="post">
                    @csrf
                      <label for="nombre">Nombre:</label>
                      <input type="text" id="nombre" name="nombre" required>

                      <label for="apellido">Apellido:</label>
                      <input type="text" id="apellido" name="apellido" required>

                      <label for="email">Correo Electrónico:</label>
                      <input type="email" id="email" name="email" required>

                      <label for="password">Contraseña:</label>
                      <input type="password" id="password" name="password" required>
                      <label for="confirmar_contrasena">Confirmar Contraseña:</label>
                      <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" required>
                      <br><br>

                      <button type="button" id="registro">Registrarse</button>
                    </form>
                </div>
                <div id="derecho">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <hr>
                    <div class="pie-form">
                      <img class="logo2" src="{{ asset('IMG/Logo.png') }}" alt="imagen">
                        <hr>
                        <a href="http://localhost:8001/">« Volver</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/registro.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection
