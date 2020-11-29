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

        $alquileres= DB::select('select *  from alquileres');
        
        $nombres =[];
                foreach ($alquileres as $key) {
                    $nombres[]=DB::select('select id,nombre from users where id = :user_id', ['user_id' => $key->user_id]);
                    $vehiculos[]=DB::select('select id,tipo,img from vehiculos where id= :vehiculo_id', ['vehiculo_id' => $key->vehiculo_id]);
                }
               
                if (isset($vehiculos)) {
                    return view('home',compact('nombres','vehiculos'));
                }else{
                    return view('home');
                }
                
                //return var_dump($nombres);
  
       }else{
           
                $alquileres_usuario=DB::select('select id, user_id,vehiculo_id from alquileres where user_id = :id',['id'=>auth()->user()->id]);
               
                if (sizeof($alquileres_usuario)>0) {
                   foreach ($alquileres_usuario as $vehiculo ) {
                    
                    $vehiculos_alquiler[]=App\Vehiculo::find($vehiculo->vehiculo_id);
                }
                }
               
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
            if (sizeof($alquileres_usuario)==0) {
                return view('usuario',compact('no_Alquilados','si_Alquilados'));
             }else{
                return view('usuario',compact('no_Alquilados','si_Alquilados','vehiculos_alquiler'));
             }
          
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
    public function confirmarvehiculo($id){
       
        $vehiculo = Vehiculo::findOrFail($id);
       
        return view('layouts.confirmarvehiculo',compact('vehiculo'));

    }
    public function confirmarusuario($id){
       
        $usuario = User::findOrFail($id);
       
        return view('layouts.confirmarusuario',compact('usuario'));

    }

    public function borrarusuario($id){
        $usuario= App\User::find($id);
        $usuario->delete();
        $nombres= App\User::all();
        return view('layouts.borrarUsuario',compact('nombres'))->with('exitoborrar','Usuario borrado correctamente');
    }

    public function borrarvehiculo($id){
        $vehiculo= App\Vehiculo::find($id);
        $vehiculo->delete();
        $vehiculos= App\Vehiculo::all();    
        return view('layouts.borrarVehiculo',compact('vehiculos'))->with('exitoborrar','Vehiculo borrado correctamente');
    }
    public function alquilar($id){ // coge id vehiculo  
       
        $vehiculo= App\Vehiculo::find($id);
        $usuario = App\User::find(auth()->user()->id);
        
            return view('layouts.alquilar',compact('vehiculo'));
        
        
    }
    public function alquilado($id){
        $usuario = App\User::find(auth()->user()->id);
        $vehiculo = App\Vehiculo::find($id);
        
            $date= Carbon::now()->toDateTimeString();
           
            DB::insert('insert into alquileres (id, user_id,vehiculo_id,fecha,created_at,updated_at) values (?,?,?,?,?,?)', [NULL, auth()->user()->id, $vehiculo->id,$date,$date,$date ]);
            $vehiculo->update([
                'cantidad' => $vehiculo->cantidad-1,
            ]);

            return view('layouts.alquilado',compact('vehiculo','date'));
        

    }

    public function devolver($id){

        
        $vehiculo = App\Vehiculo::find($id);
        $usuario = App\User::find(auth()->user()->id);

        //$usuario->update(['n_alquileres'=> $usuario->n_alquileres+1]);
        $alquiler = DB::select('select * from Alquileres where user_id = ? and vehiculo_id= ?', [auth()->user()->id,$id]);
     
        
        $hora_bd=Carbon::parse($alquiler[0]->fecha);;
        $now = Carbon::now();
        $diferencia= $now->diffAsCarbonInterval($hora_bd);
        
        $d_minutos=$now->diffInMinutes($hora_bd);
        
        $vehiculo->update([
            'cantidad' => $vehiculo->cantidad+1,
        ]);
        $usuario->update([
            'n_alquileres' => $usuario->n_alquileres+1,
        ]);
        
        $precio = $d_minutos*0.16;
        if($d_minutos == 0){
            $precio = 0.16;
        }
       $alquiler[0]->Delete();
        return view('layouts.devolver',compact('vehiculo','precio'));
           
    }
    

}
