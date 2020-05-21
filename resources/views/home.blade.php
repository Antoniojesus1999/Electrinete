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
                    


                        
                    @endauth
                   

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
