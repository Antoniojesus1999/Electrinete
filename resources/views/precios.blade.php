@extends('principal')
@section('precios')
<div class="container">
<div class="card-deck mb-3 text-center">
<div class="card mb-4 shadow-sm">
  <div class="card-header mt-4">
    <h4 class="my-3 font-weight-normal">Tus alquileres al mejor precio, ¡No vuelvas a andar!</h4>
  </div>
  <div class="card-body">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" id="carrusel">
        <div class="carousel-item active">
          <img src="{{ asset('img/electrinete.jpeg') }}"height="600px" class="d-block w-100" alt="foto principal de patinete electrico" id="ancho-carrusel">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/bicicleta.jpg') }}" height="600px"class="d-block w-100" alt="foto dos carrusel pagina principal">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/patin.jpg') }}" height="600px" class="d-block w-100" alt="foto tres del carrusel de la pagina principal">
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
    <h1 class="card-title pricing-card-title">0.16 <small class="text-muted">/ €</small></h1>
    <ul class="list-unstyled mt-3 mb-4">
      <li>Barato</li>
      <li>Facil de usar</li>
      <li>Ligero</li>
      <li>Seguro</li>
    </ul>
    <button class="btn btn-outline-danger my-2 my-sm-0"  onclick="location.href='/register'">Registrate ahora</button>
  </div>
</div>

</div>
</div>


</div>
@endsection