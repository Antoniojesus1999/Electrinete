<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Mail\MensajeDeBienvenida;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:50'],
            'apellidos' => ['required', 'string', 'max:50'],
            'localidad' => ['required', 'string', 'max:50'],
            'metodo' => ['required', 'string', 'max:50'],
            'n_alquileres' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        

        $user =User::create([
            'nombre' => $data['nombre'],
            'apellidos' => $data['apellidos'],
            'localidad' => $data['localidad'],
            'metodo' => $data['metodo'],
            'n_alquileres' => $data['n_alquileres'],
            'email' => $data['email'],
            'admin' => 'NO',
            'password' => Hash::make($data['password']),
        ]);
        Mail::to($user->email)->send(new MensajeDeBienvenida($user));
        return $user;


        /*
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        */
    }
}
