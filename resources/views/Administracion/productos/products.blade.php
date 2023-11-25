@extends('dashboard')

@section('contenido')

<div class="productos-tienda">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Productos de la tienda</h1>
        <a href="{{route('productos.create')}}" class="btn btn-primary">Nuevo Producto</a>
    </div>
    <hr>
    <table class="table" id="tablaProducto">
        <thead class="table-dark">
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>descripcion </th>
                <th>Disponiblidad</th>
                <th>Precio</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <td colspan="6">
                <h3 class="text-center text-muted">Cargando...</h3>
            </td>
        </tbody>
    </table>
</div>
<script src="{{asset('js/Global.js')}}"></script>
<script src="{{asset('js/page-productos.js')}}"></script>
@endsection
