@extends('layouts.app')
@section('homeAdmin')
    <h1>Administrador : {{auth()->user()->nombre}} </h1> 
   
      <!-- Custom styles for this template -->
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="blog.css" rel="stylesheet">
    </head>
    <body>
      <div class="container">
    <header class="blog-header py-3">
     
    </header>
  
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-center">
        USUARIOS
      </nav>
    </div>
  
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Electrinete</h1>
        <p class="lead my-3">Como administrador puedes borrar usuarios poner rol de administrador o quitarlos</p>
      </div>

      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Localidad</th>
            <th scope="col">Metodo</th>
            <th scope="col">Admin¿?</th>
            <th scope="col">Tipo de vehiculo ¿?</th>
            <th scope="col">Total alquileres</th>
            <th scope="col">Email</th>
            <th scope="col">Fecha de registro</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
               <tr>
                   <td>{{$usuario->id}}</td>
                   <td>{{$usuario->nombre}}</td>
                   <td>{{$usuario->apellidos}}</td>
                   <td>{{$usuario->localidad}}</td>
                   <td>{{$usuario->metodo}}</td>
                   <td>{{$usuario->admin}}</td>
                   <td>{{$usuario->tipo_vehiculo}}</td>
                   <td>{{$usuario->n_alquileres}}</td>
                   <td>{{$usuario->email}}</td>
                   <td>{{$usuario->created_at}}</td>

                </tr> 
            @endforeach
        </tbody>
      </table>
    </div>
  
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Crear</strong>
            <h3 class="mb-0">¿Como crear un usuario?</h3>
            
            <p class="card-text mb-auto">Se te redigira a la pagina de registro y podras registrar un nuevo usuario</p>
            
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Crear"><title>Crear</title><rect width="100%" height="100%" fill="#40C525"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Crear</text></svg>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-danger">Borrar</strong>
            <h3 class="mb-0">¿Como borrar a un usuario?</h3>
            
            <p class="mb-auto">Solo tienes que seleccionar el usuario que deseas eliminar</p>
            
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#EE4E4E"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Borrar</text></svg>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection