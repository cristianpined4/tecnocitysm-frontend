@extends('dashboard')

@section('contenido')

<div class="">
    <div class="cabezera">
       <h1> MODELOS </h1>
       <button type="submit" class="btn btn-info"><a href="/dashboard/modelos">Agregar</a></button>
    </div>
   <hr>

   <table class="table">
       <thead class="table-dark">
            <tr>
               <th>Nombre</th>
               <th>Descripcion</th>
               <th>ID Categoria</th>
               <th>ID Marca</th>
               <th>Opciones</th>
            </tr>

       </thead>
      <tbody id="modelos">
      </tbody>
   </table>

</div>
<script src="{{asset('js/tabulacionModelos.js')}}"></script>
@endsection