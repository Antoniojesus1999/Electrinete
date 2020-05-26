@extends('layouts.app')

@section('home')
<div class="container">
   
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Incio de sesion como Admin :</div>

                <div class="card-body text-center">
                   @auth
                        <div class="alert alert-success" role="alert">
                            Has iniciado sesion como{{auth()->user()->nombre  }}
                            {{auth()->user()->apellidos}}
                            
                        </div>
                       
                        <div class="alert text-left">
                            Alquileres: 
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

                            <div class="row justify-content-around">
                              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"> 
                                  <div class="card text-center"> 
                                     
                                      <div class="card-body">
                                        <h5 class="card-title">Crear</h5>
                                        <p class="card-text"> El boton crear te ayudara a crear un usuario o vehiculo</p>
                                        <button type="button" class="btn btn-success" onclick="location.href='/crear'"><img class="card-img-top" id="iconos" src="img/iconos/anadir.png" alt="boton crear">Crear</button>
                                      </div>
                                    </div>
                                  
                              </div>	 
                              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                  <div class="card" >
                                      
                                      <div class="card-body">
                                        <h5 class="card-title">Actualizar</h5>
                                        <p class="card-text">Este boton te ayudara a actualizar los datos de un usuario</p>
                                        <button type="button" class="btn btn-primary" onclick="location.href='/crear'"><img class="card-img-top" id="iconos"src="img/iconos/cruz-entrecruzada.png" alt="boton actualizar">Actualizar</button>
                                      </div>
                                    </div>
                                  
                              </div>
                              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                              <div class="card" >
                                  
                                  <div class="card-body">
                                    <h5 class="card-title">Borrar</h5>
                                    <p class="card-text">Con este boton podras eliminar un usuario</p>
                                    <button type="button" class="btn btn-danger" onclick="location.href='/crear'"> <img class="card-img-top" id="iconos" src="img/iconos/icons8-actualizar-100.png" alt="boton borrar">Borrar</button>
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
