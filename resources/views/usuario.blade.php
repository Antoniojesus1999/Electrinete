@extends('layouts.app')

@section('usuario')
<div class="container">
   
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Usuario conectado:</div>

                <div class="card-body">
                   @auth
                        <div class="alert alert-primary text-center" role="alert">
                           
                            {{auth()->user()->nombre }} {{auth()->user()->apellidos  }}
                                  
                           
                        </div>
                    <div class="card-header text-center bg-dark text-white">Vehiculos que estan agotados</div>
                    <div class="card-body">
                       
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Color</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">IMAGEN</th>
                                
                                
                              </tr>
                            </thead>
                            <tbody>

                                @foreach ($si_Alquilados as $vehiculo)
                                <tr>
                                    
                                    <td>{{$vehiculo->id}}</td>
                                    <td>{{$vehiculo->tipo}}</td>
                                    <td>{{$vehiculo->color}}</td>
                                    <td>{{$vehiculo->cantidad}}</td>
                                    <td>{{$vehiculo->descripcion}}</td>
                                    <td><img src="img/vehiculos/{{$vehiculo->img}}" id="foto-agotados" alt=""></td>
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
                                                
                                                
                                                
                                                <div class="title mt-4">
                                                <h4>{{$item->tipo}}</h4>
                                                <h6>Cantidad: {{$item->cantidad}}</h6>
                                                </div>
                                                
                                                <div class="text mt-3">
                                                    <img src="img/vehiculos/{{$item->img}}" alt="foto-vehiculo" id="tf">
                                               
                                                </div>
                                                <div class="text mt-3">
                                                    <button class="btn btn-outline-success mt-3 my-2 my-sm-0" onclick="{{ route('login') }}">{{ __('¿Desea alquilar?') }}</button>

                                                </div>
                                                
                                                
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
