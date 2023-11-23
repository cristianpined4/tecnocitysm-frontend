@extends('layouts.navbar2')

@section('content')
<div class="container">
    <h2>Crear Categoria</h2>
    <form id="formCategotias my-2">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" class="form-control" id="nombre">
        </div>
        <div class="form-group my-2">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" placeholder="Descripcion" class="form-control" id="descripcion">
        </div>
        <div class="form-group my-2">
            <label for="status">Estatus</label>
            <select name="status" id="status" class="form-control">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="reset" class="btn btn-danger" onclick="volver">Cancelar</button>
    </form>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/formCategorias.js')}}"></script>
@endsection