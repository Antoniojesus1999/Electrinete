@extends('layouts.app')

@section('alquilar')

<div class="card text-center">
    <div class="card-header">
      Modelo {{$vehiculo->tipo}}
    </div>
   
    <div class="card-body">
      <h5 class="card-title">¿Te gusta este vehiculo?</h5>
      <p class="card-text">{{$vehiculo->descripcion}}</p>
      <figure><img src="/img/vehiculos/{{$vehiculo->img}}" width="40%" alt="foto-vehiculo" id="tf"></figure>
      <div style="text-align:center;padding:1em 0;">  <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=medium&timezone=Europe%2FMadrid" width="100%" height="115" frameborder="0" seamless></iframe> </div>
       
          <a onclick="location.href='/alquilado/{{$vehiculo->id}}'"  class="btn btn-success">Alquilar en este instante</a>
       
        
    
    </div>
    <div class="card-footer text-muted">
      <em>Electrinete<em>
    </div>
  </div> 

@endsection
