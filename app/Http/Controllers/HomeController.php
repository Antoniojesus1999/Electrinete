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

        $alquileres= DB::select('select id,user_id,vehiculo_id  from alquileres');
        $nombres =[];
                foreach ($alquileres as $key) {
                    $nombres[]=DB::select('select nombre from users where id = :user_id', ['user_id' => $key->user_id]);
                    $vehiculos[]=DB::select('select tipo from vehiculos where id= :vehiculo_id', ['vehiculo_id' => $key->vehiculo_id]);
                }
                

            return view('home',compact('nombres','vehiculos'));
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
