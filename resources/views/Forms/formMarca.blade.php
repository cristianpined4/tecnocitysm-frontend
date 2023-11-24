@extends('layouts.navbar2')

@section('title', 'Crear Marca')

@section('css')
<style>
    body {
        background-color: #f5f5f5;
    }

    .container {
        background-color: #fff;
        display: block;
        width: minmax(300px, 70%);
        margin: 2rem auto;
    }

    .container h2 {
        margin-bottom: 1rem;
    }

    .my-2 {
        margin: 1rem 0;
    }
</style>
@endsection

@section('content')
<div class="container card p-3">
    <h2>Crear Marca</h2>
    <form id="formMarcas" class="my-2">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" class="form-control" id="nombre">
        </div>
        <div class="form-group my-2">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" placeholder="Descripcion" class="form-control" id="descripcion">
        </div>
        <div class="form-group my-2">
            <label for="imagen">Imagen</label><br>
            <input type="file" name="imagen" placeholder="Imagen" class="form-control-file my-2" id="imagen"
                accept="image/*">
        </div>
        <div class="form-group my-2">
            <label for="status">Estatus</label>
            <select name="status" id="status" class="form-control">
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button id="cancelar" type="reset" class="btn btn-danger" onclick="volver()">Cancelar</button>
    </form>

    <div class="d-flex justify-content-center my-3" id="imagenEdit">
    </div>
</div>

@endsection

@section('scripts')
<script src="{{asset('js/page-marcas.js')}}"></script>
@endsection