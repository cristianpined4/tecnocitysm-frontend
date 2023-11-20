<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('styles/login.css') }}">
        <div id="contenedor">

            <div id="contenedorcentrado">
                <div id="login">
                    <form id="loginform" method="POST" >
                        <label for="usuario">Usuario</label>
                        <input id="usuario" type="text" name="usuario" placeholder="Usuario" required>

                        <label for="password">Contraseña</label>
                        <input id="password" type="password" placeholder="Contraseña" name="password" required>

                        <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                    </form>

                </div>
                <div id="derecho">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <hr>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="http://localhost:8000/register">¿No tienes Cuenta? Registrate</a>
                        <hr>
                        <a href="http://localhost:8000/">« Volver</a>
                    </div>
                </div>
            </div>
        </div>
        @endsection