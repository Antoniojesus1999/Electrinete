@extends('layouts.app')
@section('vehiculo')
<div class="container">
    @auth
    
    @if(session('mensaje2'))
        <div class="alert alert-success">
        {{session('mensaje2')}}
        </div>
    @endif
    <div class="row">

      
        <div class="col-md-12">
            <div class="well well-sm">
            <form class="form-horizontal" method="POST" action="{{route('crearVehiculo')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                  
                    <fieldset>
                        <legend class="header mb-5">Datos de vehiculo</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i>Tipo</i></span>
                            <div class="col-md-8">
                            <input id="tipo" name="tipo" type="text" placeholder="Tipo" class="form-control" value="{{old('tipo')}}">
                                    @error('tipo')
                                        <div class="alert alert-danger">Tienes que escribir algo en el campo tipo</div>
                                    @enderror
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i>Descripcion</i></span>
                            <div class="col-md-8">
                                <textarea name="descripcion" id="descripcion" cols="30" value="{{old('descripcion')}}"rows="5" placeholder="Haga una pequeña descripcion"></textarea>
                                @error('descripcion')
                                        <div class="alert alert-danger">No puedes dejar la descripcion vacío</div>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i>Cantidad</i></span>
                            <div class="col-md-8">
                                <input id="numero" name="cantidad" type="number" step="1" class="form-control" value="{{old('cantidad')}}">
                                @error('cantidad')
                                <div class="alert alert-danger"> El campo cantidad tiene que estar relleno</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i>Color</i></span>
                            <div class="col-md-8">
                                <input id="color" name="color" type="text" placeholder="Introduzca color" value="{{old('color')}}"class="form-control">
                                @error('color')
                                <div class="alert alert-danger"> El campo color tiene que estar relleno</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa">Imagen</i></span>
                            <div class="col-md-8">
                               <input type="file" name="img">
                               @error('img')
                            <div class="alert alert-danger"> {{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i>Estado</i></span>
                            <div class="col-md-8">
                                <input id="estado" name="estado" value="{{old('estado')}}" type="text" placeholder="Introduzca estado" class="form-control">
                                @error('estado')
                                <div class="alert alert-danger"> El campo estado tiene que estar relleno</div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-success btn-lg">Submit</button>
                            </div>
                        </div>
                        
                    </fieldset>
                </form>
                <div class="col-md-12 ">
                                <a href="{{route('home')}}" class="btn btn-danger btn-lg">Volver</a>
                </div>
                
            </div>
        </div>
    </div>
        
    @endauth
</div>
@endsection