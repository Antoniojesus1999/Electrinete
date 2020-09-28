@extends('layouts.app') 

@section('borrarVehiculo')
<div class="container">
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
          <td><img src="img/vehiculos/{{$item->img}}" width="15%"></td>
          
        <td><button type="button" class="btn btn-danger" onclick="location.href='/actualizarbd/{{$item->id}}'">Borrar</button></td>
        </tr>
        
      
    @endforeach
  </tbody>
    </table>
   

    
</div>
@endsection