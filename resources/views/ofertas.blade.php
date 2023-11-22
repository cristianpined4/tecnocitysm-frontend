<!--Incluimos el header y footer del layout-->
@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('styles/ofertas.css') }}">
      
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>

  <div class="contenedor-general">
    <div class="contenedor-pequeno">
      <!-- Contenido del contenedor pequeño -->
      <div class="card">
    <p class="marca">Marca</p>
    <input type="text" placeholder="Seleccionar">
    <p class="precio">Precio</p>
    <div class="progress">
      <div class="progress-bar" style="width: 0%;"></div>
      <span class="progress-range">$10 - $50</span>
    </div>
  </div>
      
    </div>
    <div class="contenedor-grande">
      <div class="contenedor-grid">
        <div class="subcontenedor1">
          <h3>Ofertas Especiales</h3>
        </div>
        <div class="subcontenedor2">
          
          <select class="select1">
            <option>12</option>
            <option selected>24</option>
            <option>36</option>
          </select>
          
        <select class="select2">
        <option>Nombre (A-Z)</option>
        <option selected>Ordenar por tipo</option>
        </select>

        </div>
      </div>

      <div class="contenedor-grid">
        <div class="subcontenedor">
          <!-- necesito un boton -->
        <button type="button" class="btn btn-primary move">Oferta</button>
        <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
        <p>teclado </p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
        </div>
        <div class="subcontenedor">
        <button type="button" class="btn btn-primary move">Oferta</button>
        <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
        <p>teclado </p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
        </div>
        <div class="subcontenedor">
        <button type="button" class="btn btn-primary move">Oferta</button>
        <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
        <p>teclado </p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
        </div>
        <div class="subcontenedor">
        <button type="button" class="btn btn-primary move">Oferta</button>
        <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
        <p>teclado </p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
        </div>
      </div>

      <div class="contenedor-grid">
        <div class="subcontenedor">
        <button type="button" class="btn btn-primary move">Oferta</button>
        <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
        <p>teclado </p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
        </div>
        <div class="subcontenedor">
        <button type="button" class="btn btn-primary move">Oferta</button>
        <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
        <p>teclado </p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
        </div>
        <div class="subcontenedor">
        <button type="button" class="btn btn-primary move">Oferta</button>
        <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
        <p>teclado </p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
        </div>
        <div class="subcontenedor">
        <button type="button" class="btn btn-primary move">Oferta</button>
        <img src="https://m.media-amazon.com/images/I/61trj-kJbtL._AC_UF894,1000_QL80_.jpg" class="rounded mx-auto d-block img" alt="...">
        <p>teclado </p>
        <div class="precios">
          <p class="precios1">$27.00</p>
          <p class="precios2">$40.00</p>
        </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html> 
        @endsection
