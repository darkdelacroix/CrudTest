<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origen extends Model
{
    //

    protected $table='origenes';
    public function inventarios()
    {
        return $this->hasMany('App\Inventario');
    }
}
