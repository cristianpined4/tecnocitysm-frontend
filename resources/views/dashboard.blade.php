@extends('layouts.menu')

@section('contenido')
    <!--Contenido principal del dashboard -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <a href="{{ route('usuarios.index') }}" style="text-decoration:none; font-size:18px;">Usuarios registrados </a>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> 200 </div>
                        </div>
                        <div class="col-auto iconos"> <i class="fa-solid fa-user"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"> Referidos </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> Datos de referidos</div>
                        </div>
                        <div class="col-auto iconos"><i class="fa-solid fa-user-plus"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Productos </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> Info y más</div>
                        </div>
                        <div class="col-auto iconos"><i class="fa-solid fa-cart-shopping"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Marcas </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> Info y más</div>
                        </div>
                        <div class="col-auto iconos"><i class="fa-solid fa-tag"></i></div>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection
