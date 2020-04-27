<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre','apellidos','localidad','metodo','admin','n_alquileres','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function vehiculos(){
        
            //return $this->belongsToMany(Vehiculo::class);
            //return $this->belongsToMany('App\Vehiculo','id','user_id','vehiculo_id');
            return $this->belongsToMany('App\Vehiculo','alquileres')
                ->withPivot('user_id','vehiculo_id');
            //return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
        
    }
}
