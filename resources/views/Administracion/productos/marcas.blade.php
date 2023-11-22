@extends('dashboard')

@section('contenido')

<div class="">
    <div class="cabezera">
       <h1> Marcas </h1>
       <button type="submit" class="btn btn-info"><a href="http://localhost:8001/formMarca">Agregar</a></button>
    </div>
   <hr>

   <table class="table">
       <thead class="table-dark">
            <tr>
               <th>Id Categoria</th>
               <th>Nombre</th>
               <th>descripcion</th>
               <th>Imagen</th>
               <th>Estatus</th>
                <th>Opciones</th>
            </tr>

       </thead>
      <tbody>
      <td></td>
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
