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
      <tbody>
      <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </td>

      </tbody>
   </table>

</div>

@endsection