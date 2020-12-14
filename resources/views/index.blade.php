@extends('principal')
@section('index')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" id="carrusel">
      <div class="carousel-item active">
        <img src="{{ asset('img/pt.jpg') }}"height="600px" class="d-block w-100" alt="foto principal de patinete electrico" id="ancho-carrusel">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/a.jpg') }}" height="600px"class="d-block w-100" alt="foto dos carrusel pagina principal">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img/electrinete.jpeg') }}" height="600px" class="d-block w-100" alt="foto tres del carrusel de la pagina principal">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>

  <div id="cards">
    
  <div class="card text-white bg-dark mb-3" style="max-width: 18rem">
    
    <div class="card-body">
      <h5 class="card-title">Alquiler de bicicletas y patinetes</h5>
      <p class="card-text">Más tiempo de turismo y desplázate más rápido.</p>
    </div>
  </div>
  <div class="card text-white bg-dark mb-3" style="max-width: 18rem">
    
    <div class="card-body">
      <h5 class="card-title">Tour guiados</h5>
      <p class="card-text">Ruta en bici o patinete donde conocerás todos los secretos de Sevilla.</p>
    </div>
  </div>
  <div class="card text-white bg-dark mb-3" style="max-width: 18rem">
   
    <div class="card-body">
      <h5 class="card-title">No contaminantes</h5>
      <p class="card-text">Nuestras scooters son 100% eléctricas, cero emisiones y silenciosas.</p>
    </div>
  </div>
</div>
@endsection