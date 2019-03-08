<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{
    //
    protected $table='proveedores';

    public function inventarios()
    {
        return $this->hasMany('App\Inventario');
    }
}
