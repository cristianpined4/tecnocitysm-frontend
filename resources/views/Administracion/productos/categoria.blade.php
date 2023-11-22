@extends('dashboard')

@section('contenido')

<div class="">
   <h1> Categorias </h1>
   <hr>

   <table class="table">
       <thead class="table-dark">
            <tr>
               <th>Nombre</th>
               <th>descripcion  </th>
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
        <td>
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </td>

      </tbody>
   </table>

</div>

@endsection
