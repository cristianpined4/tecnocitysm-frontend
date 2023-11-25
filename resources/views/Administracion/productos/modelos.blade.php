@extends('dashboard')

@section('contenido')

<div class="">
    <div class="d-flex justify-content-between align-items-center">
        <h1> MODELOS </h1>
        <a href="{{route('modelos.create')}}" class="btn btn-primary">Nuevo Modelo</a>
    </div>
    <hr>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Categoria</th>
                <th>Marca</th>
                <th>Opciones</th>
            </tr>

        </thead>
        <tbody id="modelos">
            <td colspan="5">
                <h3 class="text-center text-muted">Cargando...</h3>
            </td>
        </tbody>
    </table>

</div>
<script src="{{asset('js/tabulacionModelos.js')}}"></script>
@endsection
