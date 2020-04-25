@extends('layouts.app')

@section('usuario')
<div class="container">
   
    <div class="row justify-content-center">
        <div class="col-md-10">
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
                                <th scope="col">Nombre</th>
                                <th scope="col">Color</th>
                                <th scope="col">Estado</th>
                                <th scope="col">IMG</th>
                              </tr>
                            </thead>
                            <tbody>

                                @foreach ($si_Alquilados as $vehiculo)
                                <tr>
                                    <td>{{$vehiculo->id}}</td>
                                    <td>{{$vehiculo->tipo}}</td>
                                    <td>{{$vehiculo->nombre}}</td>
                                    <td>{{$vehiculo->color}}</td>
                                    <td>{{$vehiculo->estado}}</td>
                                    <td>{{$vehiculo->img}}</td>
                                  </tr>
                                @endforeach
                              
                              
                            </tbody>
                          </table>
                          <div class="box">
                            <div class="container">

                                @foreach ($no_Alquilados as $item)
                                    
                                @endforeach
                                 <div class="row">
                                     
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                       
                                            <div class="box-part text-center">
                                                
                                                <img src="" alt="">
                                                
                                                <div class="title">
                                                <h4>{{$item->tipo}}</h4>
                                                </div>
                                                
                                                <div class="text">
                                                <span>{{$item->descripcion}}</span>
                                                </div>
                                                
                                                <a href="#">¿Desea alquilar?</a>
                                                
                                                
                                             </div>
                                        </div>	 
                                        
                                         
                                
                                </div>		
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
