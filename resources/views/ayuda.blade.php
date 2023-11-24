<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}

@section('content')

<link rel="stylesheet" href="{{ asset('styles/CentroAyuda.css') }}">

<div class="container">

    <div class="ayuda">
        <h2>Como podemos ayudarte?</h2>
        <img  src="{{ asset('IMG/Fondo2.gif') }}" alt="imagen">
        <h2>Selecciona un Tema</h2>
    </div>
</div>

<div class="container2">
    <div class="opcionesAyuda">

        <div class="card">
            <div class="card-body">
                <div class="icon">
                  <i class="fa-solid fa-user"></i>
                </div>
                <div class="contenido">
                   <h5>Manejo de Cuenta</h5>
                   <p>
                    Para nuestra empresa brindar una buena experiencia al cliente es de suma importancia por lo tanto manejamos de manera profesional y confidencial los datos personales de tu cuenta es algo con lo que cuenta nuestra tienda virtual.
                   </p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="icon">
                  <i class="fa-solid fa-credit-card"></i>
                </div>
                <div class="contenido">
                    <h5>Métodos de Pago</h5>
                    <p>
                    Conoce un poco más acerca de todos los métodos de pago con los que contamos, así como con las condiciones que aplican a cada uno.
                    </p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="icon">
                  <i class="fa-solid fa-truck"></i>
                </div>
                <div class="contenido">
                    <h5>Envíos a Domicilio</h5>
                    <p>
                     TecnoCity SM pone a disposición nuestro servicio de entregas a domicilio. Conoce de nuestra cobertura, asi como los tiempos de entrega.
                    </p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="icon">
                  <i class="fa-solid fa-hand-holding-dollar"></i>
                </div>
                <div class="contenido">
                    <h5>Garantía</h5>
                    <p>
                    Al comprar un producto en nuestra tienda queremos que te sientas seguro por lo tanto brindamos respuesta inmediata en garantías
                    </p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="icon">
                <i class="fa-regular fa-thumbs-up"></i>
                </div>
                <div class="contenido">
                    <h5>Asesoría gratuita</h5>
                    <p>
                      En TecnoCity SM te asesoramos para que compres el equipo que realmente necesitas
                    </p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="icon">
                 <i class="fa-solid fa-user-group"></i>
                </div>
                <div class="contenido">
                    <h5>Cliente Frecuente</h5>
                    <p>
                     Eres un cliente frecuente?  TecnoCity SM premia tu fidelidad y compras recurrentes a través de ofertas, descuentos y más
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
<br>



@endsection
