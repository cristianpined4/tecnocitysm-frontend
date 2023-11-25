@extends('dashboard')

@section('contenido')

<div class="">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Categorias</h1>
        <a href="{{route('categorias.create')}}" class="btn btn-primary">Nueva Categoria</a>
    </div>
    <hr>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>descripcion </th>
                <th>Imagen</th>
                <th>Estatus</th>
                <th>Opciones</th>
            </tr>

        </thead>
        <tbody id="categorias">
            <td colspan="5">
                <h3 class="text-center text-muted">Cargando...</h3>
            </td>
        </tbody>
    </table>
</div>
<script src="{{asset('js/tabulacionCategoria.js')}}"></script>
@endsection
