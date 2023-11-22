@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('styles/register.css') }}">
    <div id="contenedor">
        <div id="contenedorcentrado">
            <div id="userProfileForm">
                <form action="{{ route('registro') }}" method="post">
                    @csrf
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>

                    <label for="username">Nombre de usuario:</label>
                    <input type="text" id="username" name="nombre" required readonly>

                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required readonly>

                    <label for="password">Contraseña: </label>
                    <input type="password" id="password" name="password" required>

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
                    <a href="{{route("inicio")}}">« Volver</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/user-profile.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection
