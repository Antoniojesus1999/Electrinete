@extends('layouts.app')
@section('vehiculo')
<div class="container">
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
                                <input id="nombre" name="tipo" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>
                        @error('tipo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i>Descripcion</i></span>
                            <div class="col-md-8">
                                <textarea name="descripcion" id="" cols="30" rows="5" placeholder="Haga una pequeña descripcion"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i>Cantidad</i></span>
                            <div class="col-md-8">
                                <input id="numero" name="cantidad" type="number" step="1" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i>Color</i></span>
                            <div class="col-md-8">
                                <input id="color" name="color" type="text" placeholder="Introduzca color" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa">Imagen</i></span>
                            <div class="col-md-8">
                               <input type="file" name="img">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i>Estado</i></span>
                            <div class="col-md-8">
                                <input id="estado" name="estado" type="text" placeholder="Introduzca estado" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-success btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection