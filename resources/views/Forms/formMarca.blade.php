@extends('layouts.navbar2')

@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('styles/marcas.css')}}">
    <main>
        <div class="row">
            <div class="col-md-3 col"></div>
            <div class="col-4">
                <div class="card shadow-lg rounded opacity-75 estiloPropio mt-5 bg-light" style="width: 43rem">
                <div class="card-title center text-center">
                        <h3>Crear Marca</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('marcas.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col- d-none">
                                <label for="id"></label>
                                <input type="text" name="id" class="form-control custom-input" id="id" placeholder="id">
                            </div>
                            <div class="form-group">
                                <label for="nombre"></label>
                                <input type="text" name="nombre" class="form-control custom-input" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" name="descripcion" class="form-control custom-input" id="descripcion" placeholder="Descripcion">
                            </div>
                            <div class="form-group">
                                <label for="imagen">Imagen</label>
                                <input type="file" accept=".jpg, .jpeg, .png" name="imagen" class="form-control custom-input" id="imagen" placeholder="Imagen">
                            </div>
                            <div class="form-group">
                                <label for="estatus">Estatus</label>
                                <select name="estatus" id="estatus">
                                    <option value="1">Activo</option>
                                   <option value="0">Inactivo</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="idcategoria">Categoria</label>
                                <select name="idcategoria" id="idcategoria">
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </main>

    <script src="{{asset('js/opciones.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


@endsection
