@extends('layouts.app')

@section('usuario')
<div class="container">
   
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Usuario conectado:</div>

                <div class="card-body">
                   @auth
                        <div class="alert alert-primary" role="alert">
                           
                            {{auth()->user()->nombre }} {{auth()->user()->apellidos  }}
                                  
                           
                        </div>
                    <div class="card-header text-center bg-dark text-white">Vehiculos que estan alquilados</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Color</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Usuario</th>
                                
                              </tr>
                            </thead>
                            <tbody>

                                @foreach ($si_Alquilados as $vehiculo)
                                <tr>
                                    <td>{{$vehiculo->id}}</td>
                                    <td>{{$vehiculo->tipo}}</td>
                                    <td>{{$vehiculo->color}}</td>
                                    <td>{{$vehiculo->estado}}</td>
                                    <td>{{$vehiculo->nombre}}</td>
                                    
                                  </tr>
                                @endforeach
                              
                              
                            </tbody>
                        
                        </table>
                    </div>
                        <div class="card-header text-center bg-dark text-white">Vehiculos para alquilar</div>
                          <div class="box">
                            
                            <div class="container">
                               
                                <div class="row">
                                    
                                @foreach ($no_Alquilados as $item)
                                    
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                       
                                            <div class="box-part text-center">
                                                
                                                
                                                
                                                <div class="title">
                                                <h4>{{$item->tipo}}</h4>
                                                </div>
                                                
                                                <div class="text">
                                                    <img src="img/fotos_vehiculos/{{$item->img}}" alt="foto-vehiculo" id="tf">
                                               
                                                </div>
                                                
                                                <a href="#">¿Desea alquilar?</a>
                                                
                                             </div>
                                        </div>	 
                                        
                                        @endforeach
                                
                                </div>		
                            </div>
                        </div>
                    

                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
