@extends('layouts.navbar2')

@section('title', 'Nuevo Producto')

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
    <h2>Nuevo Producto</h2>
    <form id="formProducto" class="my-2">
        <div class="row">
            <div class="form-group my-2 col-12 col-md-6">
                <label for="codigo_barras">Codigo de Barras</label>
                <input type="text" name="codigo_barras" placeholder="Codigo de Barras" class="form-control"
                    id="codigo_barras">
            </div>
            <div class="form-group my-2 col-12 col-md-6">
                <label for="codigo_producto">Codigo Interno</label>
                <input type="text" name="codigo_producto" placeholder="Codigo Interno" class="form-control"
                    id="codigo_producto" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" class="form-control" id="nombre">
        </div>
        <div class="form-group my-2">
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" placeholder="Descripcion" class="form-control" rows="5"
                id="descripcion"></textarea>
        </div>
        <div class="row">
            <div class="form-group my-2 col-12 col-md-6">
                <label for="precio">Precio Compra</label>
                <input type="number" name="precio_compra" placeholder="Precio" class="form-control" id="precio_compra"
                    min="0" step="0.01">
            </div>
            <div class="form-group my-2 col-12 col-md-6">
                <label for="precio">Precio Venta</label>
                <input type="number" name="precio_venta" placeholder="Precio" class="form-control" id="precio_venta"
                    min="0" step="0.01">
            </div>
        </div>
        <div class="row">
            <div class="form-group my-2 col-12 col-md-6">
                <label for="stock">Stock</label>
                <input type="number" name="stock" placeholder="Stock" class="form-control" id="stock" min="0">
            </div>
            <div class="form-group my-2 col-12 col-md-6">
                <label for="status">Estatus</label>
                <select name="status" id="status" class="form-control">
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                </select>
            </div>
        </div>
        <div class="form-group my-2">
            <label for="categoria">Categoria</label>
            <select name="id_categoria" id="categoria" class="form-control">
                <option value="0">Seleccione una categoria</option>
            </select>
        </div>
        <div class="form-group my-2">
            <label for="marca">Marca</label>
            <select name="id_marca" id="marca" class="form-control">
                <option value="0">Seleccione una marca</option>
            </select>
        </div>
        <div class="form-group my-2">
            <label for="modelo">Modelo</label>
            <select name="id_modelo" id="modelo" class="form-control">
                <option value="0">Seleccione un modelo</option>
            </select>
        </div>
        <div class="form-group my-2">
            <label for="imagen">Imagenes</label><br>
            <input type="file" name="imagen" placeholder="Imagen" class="form-control-file my-2" id="imagen"
                accept="image/*" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button id="cancelar" type="reset" class="btn btn-danger" onclick="volver()">Cancelar</button>
    </form>

    <div id="imagenEdit"
        style="display: grid;grid-template-columns: repeat(auto-fill,minmax(210px,1fr));grid-gap: 1rem;margin-top: 3rem;">
    </div>
</div>

@endsection

@section('scripts')
<script src="{{asset('js/page-productos.js')}}"></script>
@endsection
