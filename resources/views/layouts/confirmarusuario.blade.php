@extends('layouts.app')
@section('confirmarusuario')
<div class="container">
   
<h1>¿Deseas eliminar el usuario con id{{ $usuario->id}}, nombre {{ $usuario->nombre}} y apellidos {{$usuario->apellidos}}? </h1>

<form method="get" class="text-center" action="{{ route('borrarusuario', $usuario->id )}}">
	
	@csrf
	<button type="submit" class="redondo btn btn-danger mr-5" >
		<i class="fas fa-trash-alt">Eliminar</i> 
	</button>
	<a class="redondo btn btn-secondary" href="{{ route('home') }}" val>
		<i class="fas fa-trash-alt">Cancelar</i> 
	</a>
	<input type="hidden" name="usu" value="usu">
</form>	

</div>
@endsection