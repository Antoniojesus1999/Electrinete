@extends('layouts.app') 

@section('borrarVehiculo')
<div class="container">
   @if(session('exitoborrar'))
        <div class="alert alert-success">
        {{session('exitoborrar')}}
        {{Session::forget('exitoborrar')}}
        </div>
    @endif
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">TIPO</th>
          <th scope="col">DESCRIPCION</th>
          <th scope="col">IMAGEN</th>
          <th scope="col">¿Borrar?</th>
        </tr>
      </thead>
      <tbody>
    @foreach ($vehiculos as $item)
    
        <tr>
        <th scope="row">{{$item->id}}</th>
          <td>{{$item->tipo}}</td>
          <td>{{$item->descripcion}}</td>
          <td><img src="{{asset('img/vehiculos/'.$item->img)}}" width="20%"></td>
          
        <td><button type="button" class="btn btn-danger" onclick="location.href='/confirmarvehiculo/{{$item->id}}'" >Borrarr</button></td>
        </tr>
        
      
    @endforeach
  </tbody>
    </table>
   
    <button type="button" class="btn btn-danger" onclick="location.href='/home'">Volver</button>

    
</div>
@endsection