<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $table='marcas';
    protected $guarded = [];

    public function inventarios()
    {
        return $this->hasMany('App\Inventario');
    }
}
