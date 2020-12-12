@extends('principal')
@section('patinete')
<div class="container">
<div class="card-deck mb-3 text-center">
<div class="card mb-4 shadow-sm">
  <div class="card-header mt-4">
    <h4 class="my-3 font-weight-normal">Patinete Electrica</h4>
  </div>
  <div class="card-body">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        
      </ol>
      <div class="carousel-inner" id="carrusel">
        <div class="carousel-item active">
          <img src="{{ asset('img/Vehiculos/patines.jpg') }}"height="400px" width="20px" class="d-block w-100" alt="foto principal de patinete electrico" id="ancho-carrusel">
        </div>
        
      </div>
     
  
    </div>
    <h1 class="card-title pricing-card-title">0.16 <small class="text-muted">/ €</small></h1>
    <ul class="list-unstyled mt-3 mb-4">
      <li>Rapido</li>
      <li>Facil de usar</li>
      <li>Con mucha autonomia</li>
      <li>Sin carnet</li>
    </ul>
    <button class="btn btn-outline-danger my-2 my-sm-0"  onclick="location.href='/'">Inicio</button>
  </div>
</div>

</div>
</div>


</div>
@endsection