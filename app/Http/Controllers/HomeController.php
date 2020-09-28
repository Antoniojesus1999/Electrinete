<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App; 
use App\User;
use App\Alquileres;
use App\Vehiculo;
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
                    $nombres[]=DB::select('select id,nombre from users where id = :user_id', ['user_id' => $key->user_id]);
                    $vehiculos[]=DB::select('select id,tipo,img from vehiculos where id= :vehiculo_id', ['vehiculo_id' => $key->vehiculo_id]);
                }
                
                //return var_dump($nombres);
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

    public function crear(){
        return view('layouts.crear');
    }

    

    public function crearTipo(){
        if(request('btn')=='Crear vehiculo'){
                return view('layouts.crearVehiculo');
        }else{
                return view('auth.register');
        };
    }


    public function crearVehiculo(Request $request){
       
       $request->validate([
            'tipo' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'color' => 'required',
            'img' => 'required|image',
            'estado' => 'required',
        ]);
        $fecha = Carbon::now();
        $fecha = $fecha->toDateTimeString(); 
        $file = request()->file('img');
        $file->store('', ['disk' => 'discoMIO']);

        $nuevoVehiculo = new App\Vehiculo;
        $nuevoVehiculo->id = null;
        $nuevoVehiculo->tipo = $request->tipo;
        $nuevoVehiculo->descripcion = $request->descripcion;
        $nuevoVehiculo->cantidad = $request->cantidad;
        $nuevoVehiculo->color = $request->color;
        $nuevoVehiculo->img = substr($request->file('img')->store('vehiculos/'),11);
        $nuevoVehiculo->estado = $request->estado;
        $nuevoVehiculo->created_at = $fecha;
        $nuevoVehiculo->updated_at = $fecha;
        $nuevoVehiculo->save();

        return back()->with('mensaje2','Vehiculo creado correctamente');
        
    }

    public function actualizar(){

        $vehiculos= App\Vehiculo::all();
        
        return view('layouts.actualizar',compact('vehiculos'));
    }

    public function actualizarbd($id){
        $vehiculo =DB::select('select * from vehiculos where id= :id', ['id' => $id]);
      return view('layouts.actualizarbd',compact('vehiculo'));
      
    }
    public function update(Request $request){
        $request->validate([
            'tipo' => 'required',
            'descripcion' => 'required',
            //'img'  => 'image|required',
            'cantidad' => 'required',
            'color' => 'required',
            'estado' => 'required',
        ]);
        
        $vehiculo = Vehiculo::findOrFail(request('id'));
        $vehiculo->tipo = $request->tipo;
        $vehiculo->descripcion = $request->descripcion;
        $vehiculo->cantidad = $request->cantidad;
        $vehiculo->color = $request->color;
        $vehiculo->estado = $request->estado;  
        
        if(@getimagesize($request->img)){
            $file = request()->file('img');
            $file->store('', ['disk' => 'discoMIO']);
            $vehiculo->img =substr($request->file('img')->store('vehiculos/'),11);
        }
        $vehiculo->save();

        $vehiculos= App\Vehiculo::all();
        
        session(['exito' => 'Actualizado correctamente']);
        return view('layouts.actualizar',compact('vehiculos'));
    }

    public function borrar(Request $request){
        
        
        return view('layouts.borrar');
    }

    public function borrarbd(Request $request){
        
       
        if($request->btn == 'Borrar usuario'){
          
            $nombres =DB::select('select * from users where admin= :admin', ['admin' => 'NO']); 
            return view('layouts.borrarUsuario',compact('nombres'));
        }else{
            $vehiculos= App\Vehiculo::all();    
            return view('layouts.borrarVehiculo',compact('vehiculos'));
        }
        
    }
    public function borrarusuario($id){
        return $id;
    }

    

}
