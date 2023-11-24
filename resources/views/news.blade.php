@extends('layouts.layout')

{{-- Agregamos un section para poder trabajar con layout --}}
@section('content')

    <div style="margin: 3%;">
        <div class="card mb-3" style="max-width: 50%">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('IMG/1366_2000.jpeg') }}" class="card-img" alt="Laptop gamer">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            Esta es la torre gaming que yo me compraría: los ordenadores con mejor relación calidad precio para jugar
                        </h5>
                        <p class="card-text">
                            Ya sea solamente para echar unas partidas o para combinar el juego con otras tareas más o menos exigentes, comprar una torre gaming es una buena opción para quien no quiere complicarse en la aventura en montar su ordenador a piezas.
                        </p>
                        <a href="https://www.xataka.com/seleccion/esta-torre-gaming-que-yo-me-compraria-ordenadores-mejor-relacion-calidad-precio-para-jugar-recomendados-xataka" target="_blank">Ver más</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 align-self-end" style="max-width: 50%; margin-top: 1%; margin-left: 50%">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('IMG/1200_800.jpeg') }}" class="card-img" alt="Satelite">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            El hackeo del GPS de los aviones es una realidad. La UE tiene lo necesario para enfrentarse al problema: se llama Galileo
                        </h5>
                        <p class="card-text">
                            Ya sea solamente para echar unas partidas o para combinar el juego con otras tareas más o menos exigentes, comprar una torre gaming es una buena opción para quien no quiere complicarse en la aventura en montar su ordenador a piezas.
                        </p>
                        <a href="https://www.xataka.com/espacio/hackeo-gps-aviones-realidad-ue-tiene-necesario-para-enfrentarse-al-problema-se-llama-galileo" target="_blank">Ver más</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 50%">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('IMG/1200_800 (1).jpeg') }}" class="card-img" alt="Honor">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            Honor tiene un plan para conquistar la gama alta: los Honor 100 y 100 Pro
                        </h5>
                        <p class="card-text">
                            El día está movido a nivel de presentaciones. A primera hora de la mañana conocíamos los OPPO Reno 11 y 11 Pro. Horas después llegaban los Red Magic 9 Pro y 9 Pro+, siendo ahora el turno de Honor con los 100 y 100 Pro. Se trata de la gama alta de Honor, justo por debajo de los Magic.
                        </p>
                        <a href="https://www.xataka.com/moviles/honor-100-caracteristicas-precio-ficha-tecnica" target="_blank">Ver más</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 align-self-end" style="max-width: 50%; margin-top: 1%; margin-left: 50%">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('IMG/GTA-6-2-3.jpg') }}" class="card-img" alt="GTA 6">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            GTA 6 será presentado el 3 de diciembre
                        </h5>
                        <p class="card-text">
                            Hace un par de semanas os contamos que Rockstar estaba planeando el anuncio de GTA 6 para este mismo mes de noviembre, cosa que se cumplió, y que la propia compañía dijo abiertamente que publicaría el primer tráiler del juego en algún momento del mes de diciembre. No teníamos una fecha concreta, pero un nuevo rumor apunta directamente al 3 de diciembre.
                        </p>
                        <a href="https://www.muycomputer.com/2023/11/22/gta-6-sera-presentado-el-3-de-diciembre/" target="_blank">Ver más</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 50%">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('IMG/Call-of-Duty-2024-sera-Black-Ops-Gulf-War.jpg') }}" class="card-img" alt="Call of Duty: Black Ops Gulf War">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            Call of Duty 2024 será Black Ops: Gulf War
                        </h5>
                        <p class="card-text">
                            Ya tenemos las primeras informaciones sobre Call of Duty 2024, y los detalles que nos dejan son bastante interesantes tanto por la ambientación del juego como por el ciclo de desarrollo que habría afrontado. Antes de entrar en materia quiero daros algo de contexto porque creo que es importante para entender mejor todo lo que os voy a contar sobre esta nueva entrega.
                        </p>
                        <a href="https://www.muycomputer.com/2023/11/23/call-of-duty-2024-sera-black-ops-gulf-war/" target="_blank">Ver más</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 align-self-end" style="max-width: 50%; margin-top: 1%; margin-left: 50%">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('IMG/Apple-Touch-ID.jpg') }}" class="card-img" alt="Satelite">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            Apple dice adiós a Touch ID, el fin de una era
                        </h5>
                        <p class="card-text">
                            El lanzamiento de Apple Touch ID marcó un importante punto de inflexión en el sector smartphone, ya que popularizó la integración de lectores de huellas dactilares en un mercado que, hasta entonces, se había limitado a los clásicos patrones de líneas o combinaciones de números como medida de seguridad en la pantalla de bloqueo.
                        </p>
                        <a href="https://www.muycomputer.com/2023/11/23/apple-dice-adios-a-touch-id-el-fin-de-una-era/" target="_blank">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
