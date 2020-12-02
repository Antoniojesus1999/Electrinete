<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alquileres extends Model
{
    protected $fillable = [
        'id','user_id','vehiculo_id','fecha',
    ];
}
