<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model

{
    protected $fillable = ['cantidad'];
    //return $this->belongsToMany(User::class);
        //return $this->belongsToMany('App\Vehiculo','id','vehiculo_id','user_id')
        //->withPivot('id', 'user_id','vehiculo_id', 'created_at','update_at');

        //return $this->belongsToMany('App\Vehiculo','alquileres')
               // ->withPivot();

    public function users() {
        return $this->belongsToMany('App\User');
    }
}
