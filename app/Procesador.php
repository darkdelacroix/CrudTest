<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procesador extends Model
{
    //
    protected $table='procesadores';
    public function inventarios()
    {
        return $this->hasMany('App\Inventario');
    }
}
