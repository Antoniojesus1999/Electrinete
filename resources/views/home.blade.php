@extends('layouts.app')

@section('home')
<div class="container">
   
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">Incio de sesion como Admin :</div>

                <div class="card-body text-center">
                   @auth
                        <div class="alert alert-success" role="alert">
                            {{auth()->user()->nombre  }}
                            {{auth()->user()->apellidos}}
                            
                        </div>
                    
                        
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">Id Usuario</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Id Vehiculo</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">IMAGEN</th>
                                    
                                    
                                  </tr>
                                </thead>
                                <tbody>
    
                                    @for ($i = 0; $i < sizeof($nombres); $i++)
                                        
                                    
                                    <tr>
                                        <td>{{$nombres[$i][0]->id}}</td>
                                        <td>{{$nombres[$i][0]->nombre}}</td>
                                        <td>{{$vehiculos[$i][0]->id}}</td>
                                        <td>{{$vehiculos[$i][0]->tipo}}</td>
                                        <td><img src="img/fotos_vehiculos/{{$vehiculos[$i][0]->img}}" id="foto-agotados" alt=""></td>
                                        
                                      </tr>
                                    @endfor
                                  
                                  
                                </tbody>
                            
                            </table>

                            
                            </div>
                        

                    @endauth
                   

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
