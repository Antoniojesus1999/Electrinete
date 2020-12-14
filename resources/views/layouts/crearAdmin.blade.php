@extends('layouts.app') 

@section('crearAdmin')

<div class="container card-body text-center ">
    @if(session('EXIT'))
        <div class="alert alert-success">
        {{session('EXIT')}}
        </div>
    @endif  

    @if(session('borrradoAdmin'))
    <div class="alert alert-success">
    {{session('borrradoAdmin')}}
    </div>
  @endif  
  @if(session('errorAdmin'))
              <div class="alert alert-danger">
              {{session('errorAdmin')}}
              </div>
          @endif
    @auth
    <h1>Usuarios que no son administradores</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Email</th>
            <th scope="col">Localidad</th>
            <th scope="col">¿Hacer admin?</th>
            
          </tr>
        </thead>
        <tbody>

            @foreach ($usuariosNO as $user)
            
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->nombre}}</td>
                <td>{{$user->apellidos}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->localidad}}</td>
                <td><button type="button" class="btn btn-success" onclick="location.href='/nuevoAdmin/{{$user->id}}'">Añadir</button>
                </td>
              </tr>
           
                @endforeach
          
        </tbody>
    
    </table>

        <h1>Usuario que son administradores</h1>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Email</th>
            <th scope="col">Localidad</th>
            <th scope="col">¿Hacer admin?</th>
            
          </tr>
        </thead>
        <tbody>

            @foreach ($usuariosSI as $user)
            
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->nombre}}</td>
                <td>{{$user->apellidos}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->localidad}}</td>
                <td><button type="button" class="btn btn-danger" onclick="location.href='/quitarAdmin/{{$user->id}}'">Quitar</button>
                </td>
              </tr>
           
                @endforeach
          
        </tbody>
    
    </table>


    <a href="/home" class="btn btn-danger">Volver</a>
    @endauth
</div>
@endsection
