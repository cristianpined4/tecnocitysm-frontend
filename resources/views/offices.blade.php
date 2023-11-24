@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')
    <div style="margin: 3%">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img  src="{{ asset('IMG/offices.png') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Nuestras oficinas</h5>
                        <p class="card-text">
                            Estamos ubicados a lo largo de todo el país, para que puedas visitarnos y conocer nuestros productos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="https://maps.app.goo.gl/gjyHBSu89RmTQJz76" target="_blank">Sucursal de occidente</a></li>
                <li class="list-group-item"><a href="https://maps.app.goo.gl/AbSwNuV1R4A4eQpA9" target="_blank">Sucursal de San Salvador</a></li>
                <li class="list-group-item"><a href="https://maps.app.goo.gl/oTdWJFKT8zKeeqDA9" target="_blank">Sucursal paracentral</a></li>
                <li class="list-group-item"><a href="https://maps.app.goo.gl/AnmWAmQzsR4hihNMA" target="_blank">Sucursal oriental</a></li>
            </ul>
        </div>
    </div>
@endsection
