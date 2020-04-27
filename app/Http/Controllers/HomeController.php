<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App; 
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

                $datos= DB::table('users')
                ->join('alquileres', 'users.id', '=', 'alquileres.id')
                ->join('vehiculos', 'vehiculos.id', '=', 'alquileres.vehiculo_id')
                //->limit(1)
                ->get();

                
               
                $vehiculos= App\Vehiculo::all();
                //return $vehiculos;
                //return $datos;
            if ($vehiculos !=null) {
                $no_Alquilados=[];
                $si_Alquilados=[];
            foreach ($vehiculos as $key) {
                if ($key->alquilado=='NO') {
                    $no_Alquilados['vehiculo']=$key;

                }else{
                    $si_Alquilados['vehiculo']=$key;
                   
                }
            }
            
            

            
          return view('usuario',compact('no_Alquilados','si_Alquilados','datos'));
            }else{

                return 'Error no hay vehiculos en la base de datos';
            }
            
       }



         

    }

   
   
}
