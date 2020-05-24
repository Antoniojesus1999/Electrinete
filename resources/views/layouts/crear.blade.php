@extends('layouts.app') 

@section('crear')

<div class="container card-body text-center ">
    @auth
    <div class="alert alert-dark" role="alert">
        Si deseas crear un usuario pulsa crear usuario si deseas introducir a la flota un nuevo vehiculo pulsa el boton crear vehiculos
    </div>
<form method="GET" action="{{route('crearTipo')}}">
    @csrf
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-5 col-sm-4 col-xs-12 ">
            <img class="card-img-top mb-2" id="iconos" src="img/iconos/anadir.png" alt="png añadir">
            <input type="submit" name="btn" class="btn btn-danger form-control" value="Crear vehiculo" >
          </div>
          <div class="col-lg-6 col-md-5 col-sm-4 col-xs-12 " >
            <img class="card-img-top mb-2" id="iconos" src="img/iconos/anadir.png" alt="png añadir">
            <input type="submit" name="btn" class="btn btn-success form-control" value="Crear usuario">
          </div>
        </div>
      </form>
    
    @endauth
</div>
@endsection
