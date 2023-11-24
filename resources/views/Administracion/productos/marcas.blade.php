@extends('dashboard')

@section('contenido')

<div class="">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Marcas</h1>
        <a href="{{route('marcas.create')}}" class="btn btn-primary">Nueva Marca</a>
    </div>
    <hr>

    <table class="table" id="tablaMarca">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>Estatus</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<script src="{{ asset('js/Global.js') }}"></script>
<script src="{{asset('js/page-marcas.js')}}"></script>
@endsection