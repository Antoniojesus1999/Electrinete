@extends('layouts.app') 

@section('borrarUsuario')
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
          <th scope="col">NOMBRE</th>
          <th scope="col">APELLIDO</th>
          <th scope="col">ADMIN</th>
          <th scope="col">LOCALIDAD</th>
          <th scope="col">METDO</th>
        </tr>
      </thead>
      <tbody>
    @foreach ($nombres as $item)
    
        <tr>
        <th scope="row">{{$item->id}}</th>
          <td>{{$item->nombre}}</td>
          <td>{{$item->apellidos}}</td>
          <td>{{$item->admin}}</td>
          <td>{{$item->localidad}}</td>
          <td>{{$item->metodo}}</td>
          
        <td><button type="button" class="btn btn-danger" onclick="location.href='/confirmarusuario/{{$item->id}}'" >Borrar</button>
        <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"> </span>
        </td>
        </tr>
        
      
    @endforeach
  </tbody>
    </table>
   
    <button type="button" class="btn btn-success" onclick="location.href='/home'" onclick="return confirm('Seguro que desea eliminar este usuario')">Volver</button>
    
</div>
@endsection