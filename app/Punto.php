<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Punto extends Model
{
    protected $table='punto';
    protected $fillable =  array('nombre', 'lat', 'lng', 'descripcion', 'direccion', 'tipos_nombre');
    protected $hidden = ['created_at','updated_at'];

}

