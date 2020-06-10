@extends('layouts.app')

@section('actualizarbd')
    <div class="container mr-5">
        
        <form method="POST" action="{{route('update')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <fieldset>
                <legend class="header mb-5">Actualizar vehiculo</legend>
                <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i>Id</i></span>
                    <div class="col-md-8">
                    {{$vehiculo[0]->id}}
                    <input type="hidden" name="id" value="{{$vehiculo[0]->id}}">
                   
                    </div>
                </div>
                <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i>Tipo</i></span>
                    <div class="col-md-8">
                    <input id="tipo" name="tipo" type="text" placeholder="Tipo"  class="form-control" value="{{$vehiculo[0]->tipo}}">
                    @error('tipo')
                    <div class="alert alert-danger"><strong>{{ $message }}</strong></div>
                @enderror
                    </div>
                </div>
                
                
                <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i>Descripcion</i></span>
                    <div class="col-md-8">
                        <input type="text" name="descripcion" value="{{$vehiculo[0]->descripcion}}">
                        @error('descripcion')
                        <div class="alert alert-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                    </div>
                </div>

                <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i>Cantidad</i></span>
                    <div class="col-md-8">
                    <input id="numero" name="cantidad" type="number" step="1" class="form-control" value="{{$vehiculo[0]->cantidad}}">
                        @error('cantidad')
                    <div class="alert alert-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                    </div>
                </div>

                <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i>Color</i></span>
                    <div class="col-md-8">
                        <input id="color" name="color" type="text" placeholder="Introduzca color" value="{{$vehiculo[0]->color}}" class="form-control">
                        @error('color')
                        <div class="alert alert-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                    </div>
                </div>

                <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa">Imagen</i></span>
                    <div class="col-md-8">
                       <input type="file" name="img" value="{{$vehiculo[0]->img}}">
                       @error('img')
                        <div class="alert alert-danger"><strong>{{ $message }}</strong></div>
                    @enderror
                    </div>
                </div>

                <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i>Estado</i></span>
                    <div class="col-md-8">
                        <input id="estado" name="estado" value="{{$vehiculo[0]->estado}}" type="text" placeholder="Introduzca estado" class="form-control">
                        @error('estado')
                        <div class="alert alert-danger"><strong>{{ $message }}</strong></div>
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
    </div>
@endsection