@extends('layouts.app') 

@section('borrar')

<div class="container card-body text-center ">
    @auth
    <div class="alert alert-dark" role="alert">
        Si deseas borrar un usuario pulsa borrar usuario si lo que quieres es borrar un vehiculo pulsa borrar vehiculo
    </div>
<form method="GET" action="{{route('borrarbd')}}">
    @csrf
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-5 col-sm-4 col-xs-12 ">
            <img class="card-img-top mb-2" id="iconos" src="img/iconos/cruz-entrecruzada.png" alt="png borrar">
            <input type="submit" name="btn" class="btn btn-danger form-control" value="Borrar usuario" >
          </div>
          <div class="col-lg-6 col-md-5 col-sm-4 col-xs-12 " >
            <img class="card-img-top mb-2" id="iconos" src="img/iconos/cruz-entrecruzada.png" alt="png borrar">
            <input type="submit" name="btn" class="btn btn-success form-control" value="Borrar vehiculo">
          </div>
        </div>
      </form>
    
    @endauth
</div>
@endsection
