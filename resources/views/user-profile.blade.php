<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('styles/register.css') }}">
    <div id="contenedor">
        <div id="contenedorcentrado">
            <div id="register">
                <form action="{{ route('actualizar') }}" method="post">
                    @csrf
                    <label for="nombre">Nombre completo:</label>
                    <input type="text" id="nombre" name="nombre" required>

                    <label for="username">Nombre de usuario:</label>
                    <input type="text" id="username" name="username" required readonly>

                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required readonly>

                    <label for="currentPassword">Confirmar contraseña actual:</label>
                    <input type="password" id="currentPassword" name="currentPassword" required>

                    <label for="newPassword">Nueva contraseña:</label>
                    <input type="password" id="newPassword" name="newPassword" required>

                    <label for="confirmPassword">Confirmar nueva Contraseña:</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required>
                    <br><br>

                    <button type="submit" id="btnUpdate">Actualizar datos</button>
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
