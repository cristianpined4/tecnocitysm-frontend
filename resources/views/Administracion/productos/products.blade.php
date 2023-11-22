@extends('dashboard')

@section('contenido')

<div class="productos-tienda">
<h1>Productos de la tienda</h1>
    <hr>

    <table class="table">
       <thead class="table-dark">
            <tr>
               <th>Imagen</th>
               <th>Nombre</th>
               <th>descripcion  </th>
               <th>Disponiblidad</th>
                <th>Precio</th>
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
