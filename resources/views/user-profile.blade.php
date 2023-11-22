<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('styles/register.css') }}">
    <div id="contenedor">
        <div id="contenedorcentrado">
            <div id="register">
                <form action="{{ route('registro') }}" method="post">
                    @csrf
                    <label for="nombre">Nombre completo:</label>
                    <input type="text" id="nombre" name="nombre" required>

                    <label for="username">Nombre de usuario:</label>
                    <input type="text" id="username" name="username" required readonly>

                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required readonly>

                    <label for="password">Confirmar contraseña actual:</label>
                    <input type="password" id="password" name="password" required>

                    <label for="new_password">Nueva contraseña:</label>
                    <input type="password" id="new_password" name="new_password" required>

                    <label for="confirm_password">Confirmar nueva Contraseña:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <br><br>

                    <button type="button" id="registro">Actualizar datos</button>
                </form>
            </div>
            <div id="derecho">
                <div class="titulo">
                    Perfil de usuario
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
    <script src="{{ asset('js/user-profile.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection
