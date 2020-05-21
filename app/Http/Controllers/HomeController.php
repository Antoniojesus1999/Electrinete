<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App; 
use App\User;
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

        return view('home');
       }else{
            
            /*$users = App\User::join("alquileres","users.id","=","user_id")
                ->get();*/

            
                /*return DB::table('alquileres')
                ->join('users', 'users.id', '=', 'alquileres.user_id')
                ->join('vehiculos', 'vehiculos.id', '=', 'alquileres.vehiculo_id')
                ->get();

                /*return User::join("alquileres","users.id","=","alquileres.user_id")
                ->join("vehiculos","vehiculos.id","=","alquileres.vehiculo_id")
                ->where("users.id","=","alquileres.user_id")
                ->get();*/

                
               
                $vehiculos= App\Vehiculo::all();

            if ($vehiculos !=null) {
                // Si la consulta de la tabla vehiculo devuelve algo se crean lo array
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
