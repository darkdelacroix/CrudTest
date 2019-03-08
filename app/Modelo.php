<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    //
    protected $table='modelos';
    public function inventarios()
{
    return $this->hasMany('App\Inventario');
}
}
