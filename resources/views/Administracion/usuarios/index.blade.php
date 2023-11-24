@extends('dashboard')

@section('contenido')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('styles/dashboard.css') }}">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

<div class="container-user">
    <h1>Usuarios del sistema</h1>
    <hr>

    <table class="table" id="table-user">
        <thead class="table-dark">
            <tr>
                <th></th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>rol</th>
                <th>Opciones</th>
            </tr>

        </thead>
        <tbody>
        </tbody>
    </table>

</div>
<script src="{{ asset('js/Global.js') }}"></script>
<script src="{{ asset('js/page-users.js') }}"></script>
@endsection