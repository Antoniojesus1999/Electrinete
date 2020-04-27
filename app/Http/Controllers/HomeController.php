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
            //$vehiculos= App\Vehiculo::all();
            /*$users = App\User::join("alquileres","users.id","=","user_id")
                ->get();*/

                $datos= DB::table('users')
                ->join('alquileres', 'users.id', '=', 'alquileres.id')
                ->join('vehiculos', 'vehiculos.id', '=', 'alquileres.vehiculo_id')
                //->limit(1)
                ->get();
                
              
            if ($datos !=null) {
                $no_Alquilados=[];
                $si_Alquilados=[];
            foreach ($datos as $key) {
                if ($key->alquilado=='NO') {
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
