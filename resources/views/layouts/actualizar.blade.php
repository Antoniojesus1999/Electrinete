@extends('layouts.app') 

@section('actualizar')
<div class="container">
    
  @if(session('exito'))
        <div class="alert alert-success">
        {{session('exito')}}
        {{Session::forget('exito');}}
        </div>
    @endif
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">TIPO</th>
          <th scope="col">DESCRIPCION</th>
          <th scope="col">IMAGEN</th>
        </tr>
      </thead>
      <tbody>
    @foreach ($vehiculos as $item)
    
        <tr>
        <th scope="row">{{$item->id}}</th>
          <td>{{$item->tipo}}</td>
          <td>{{$item->descripcion}}</td>
          <td><img src="img/vehiculos/{{$item->img}}" id="foto-agotados"></td>
        <td><button type="button" class="btn btn-success" onclick="location.href='/actualizarbd/{{$item->id}}'">Actualizar</button></td>
        </tr>
        
      
    @endforeach
  </tbody>
    </table>
   

    
</div>
@endsection