@extends('layouts.app')

@section('home')
<div class="container">
   
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Session de :</div>

                <div class="card-body">
                   @auth
                        <div class="alert alert-success" role="alert">
                            {{ 
                                auth()->user()->nombre
                            }}
                        </div>
                    


                        
                    @endauth
                   

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
