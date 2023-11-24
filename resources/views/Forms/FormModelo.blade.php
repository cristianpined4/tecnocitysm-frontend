@extends('layouts.navbar2')

@section('title', 'Crear Modelo')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-6">
            <h1 class="text-center">Agregar Nuevo Modelo</h1>
            <br>
            <div class="card">
                <div class="card-body">

                    <form id="FormModelo" class="my-2">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" placeholder="Nombre" class="form-control" id="nombre">
                        </div>
                        <div class="form-group my-2">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" placeholder="Descripcion" class="form-control"
                                id="descripcion">
                        </div>
                        <div class="form-group my-2">
                            <label for="descripcion">MARCA</label>
                            <select name="id_marca" id="id_marca" class="form-control">
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="descripcion">CATEGORIA</label>
                            <select name="id_categoria" id="id_categoria" class="form-control">
                                
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button id="cancelar" type="reset" class="btn btn-danger" onclick="volver()">Cancelar</button>
                    </form>

                </div>
            </div>

        </div>
        <div class="col d-flex align-items-center">
            <div class="d-flex justify-content-center my-3" id="imagenEdit">
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/formModelos.js') }}"></script>

@endsection