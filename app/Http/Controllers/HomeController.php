<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App; 
use App\User;
use App\Alquileres;
use DB;   


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
       if (auth()->user()->admin=='SI') {

        $alquileres= App\Alquileres::all();
        return  $alquileres;
        return view('home');
       }else{
            
           

                
               
                $vehiculos= App\Vehiculo::all();

            if ($vehiculos !=null) {
                // Si la consulta de la tabla vehiculo devuelve algo se crean el array
                $no_Alquilados=[];
                $si_Alquilados=[];
            foreach ($vehiculos as $key) { // vamos recorriendo lo que ha devuelto la consulta
                if ($key->cantidad > 0) { // si no esta alquilado se guarda en el array no alquilado
                    $no_Alquilados[]=$key;
                }else{
                    $si_Alquilados[]=$key;
                }
            }
            
            

            
          return view('usuario',compact('no_Alquilados','si_Alquilados'));
            }else{

                return 'Error no hay vehiculos en la base de datos';
            }
            
       }



         

    }

   
   
}
