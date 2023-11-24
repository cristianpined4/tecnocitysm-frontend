@extends('layouts.navbar2')

@section('title', 'Crear Usuario')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-6">
            <h1 class="text-center">Agregar nuevo usuario</h1>
            <br>
            <div class="card">
                <div class="card-body">

                    <form action="" id="FormUser" class="my-2">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" placeholder="Nombre" class="form-control" id="nombre">
                        </div>
                        <div class="form-group my-2">
                            <label for="descripcion">Apellido</label>
                            <input type="text" name="apellido" placeholder="Apellido" class="form-control"
                                id="apellido">
                        </div>
                        <div class="form-group my-2">
                            <label for="descripcion">Correo</label>
                            <input type="email" name="email" placeholder="Correo electronico" class="form-control"
                                id="email">
                        </div>
                        <div class="form-group my-2">
                            <label for="descripcion">Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-control"
                                id="password">
                        </div>
                        <div class="form-group my-2">
                            <label for="descripcion">Rol</label>
                            <select name="rol_id" id="rol_id" class="form-control">
                                <option value="1">Administrador</option>
                                <option value="2">Usuario</option>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="descripcion">Estado</label>
                            <select name="status" id="status" class="form-control">
                                <option value="active">Activo</option>
                                <option value="inactive">Inactivo</option>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="descripcion">Imagen</label><br>
                            <input type="file" name="imagen" placeholder="Imagen" class="form-control-file mt-1"
                                id="imagen" accept="image/*">
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
<script src="{{ asset('js/page-users.js') }}"></script>
@endsection