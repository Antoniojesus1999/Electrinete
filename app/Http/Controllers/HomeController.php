<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;    

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
            $vehiculos= App\Vehiculo::all();
            
            if ($vehiculos !=null) {
                $no_Alquilados=[];
            $si_Alquilados=[];
            foreach ($vehiculos as $key) {
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
