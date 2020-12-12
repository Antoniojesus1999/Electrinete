@extends('layouts.app')
@section('confirmarVehiculo')
<div class="container">
   
	<h1>¿Deseas eliminar el vehiculo con id{{ $vehiculo->id}}, Modelo {{ $vehiculo->tipo}}? </h1>

<form method="get" class="text-center"action="{{ route('borrarvehiculo', $vehiculo->id )}}">
	
	@csrf
	<button type="submit" class="redondo btn btn-danger mr-5">
		<i class="fas fa-trash-alt">Eliminar</i>
	</button>
	<a class="redondo btn btn-secondary" href="{{ route('borrarbd') }}">
		<i class="fas fa-trash-alt"> Cancelar</i>
	</a>
</form>	

</div>
@endsection