@extends('layouts.app')

@section('alquilado')

<div class="card text-center">
    <div class="card-header">
      Modelo {{$vehiculo->tipo}}
    </div>
   
    <div class="card-body">
    <h5 class="card-title">Has echo el alquiler con exito a las {{$date}}</h5>
      <p class="card-text">{{$vehiculo->descripcion}}</p>
      <figure><img src="/img/vehiculos/{{$vehiculo->img}}" width="40%" alt="foto-vehiculo" id="tf"></figure>
   
   <!-- <a onclick="location.href='/alquilar/$vehiculo->id}}'" class="btn btn-danger">Volver</a>-->
   <a href="/home" class="btn btn-danger">Volver</a>
    </div>
    <div class="card-footer text-muted">
      <em>Electrinete<em>
    </div>
  </div> 

@endsection
