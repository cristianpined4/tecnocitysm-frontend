@extends('dashboard')

@section('title', 'Crear Categoria')

@section('css')
<link rel="stylesheet" href="{{ asset('styles/formCategorias.css') }}">
@endsection

@section('contenido')
<div class="container">
    <h2>Crear Categoria</h2>
    <form id="formCategorias" class="my-2">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" class="form-control" id="nombre">
        </div>
        <div class="form-group my-2">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" placeholder="Descripcion" class="form-control" id="descripcion">
        </div>
        <div class="form-group my-2">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" placeholder="Imagen" class="form-control-file" id="imagen"
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
<script src="{{asset('js/formCategorias.js')}}"></script>
@endsection