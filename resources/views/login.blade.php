<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('styles/login.css') }}">
        <div id="contenedor">

            <div id="contenedorcentrado">
                <div id="login">
                    <form action="{{ route('traslado') }}" id="loginform" method="POST" >
                    @csrf
                        <label for="usuario">Correo electrónico</label>
                        <input id="usuario" type="text" name="usuario" placeholder="Usuario" required>

                        <label for="password">Contraseña</label>
                        <input id="password" type="password" placeholder="Contraseña" name="password" required>

                        <button type="button" title="Ingresar" name="Ingresar" id="Ingresar">Login</button>
                    </form>

                </div>
                <div id="derecho">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <hr>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="http://localhost:8001/register">¿No tienes Cuenta? Registrate</a>
                        <hr>
                        <a href="http://localhost:8001/">« Volver</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/login.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection
