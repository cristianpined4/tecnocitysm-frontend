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
                   <input type="text" name="apellido" placeholder="Apellido" class="form-control" id="apellido">
                </div>
                <div class="form-group my-2">
                   <label for="descripcion">Correo</label>
                   <input type="text" name="correo" placeholder="Correo electronico" class="form-control" id="correo">
                </div>
                <div class="form-group my-2">
                   <label for="descripcion">Password</label>
                   <input type="text" name="password" placeholder="Password" class="form-control" id="password">
                </div>
                 <button type="submit" class="btn btn-primary">Guardar</button>
                 <button id="cancelar" type="reset" class="btn btn-danger" onclick="user">Cancelar</button>
              </form>

            </div>
          </div>

        </div>
        <div class="col"></div>
    </div>
</div>


@endsection
