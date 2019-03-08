<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    //
    protected $table='inventarios';



    public function marcas()
    {
        return $this->belongsTo('App\Marca','id');
    }

    public function modelos()
    {
        return $this->belongsTo('App\Modelo','id');
    }
    public function procesadores()
    {
        return $this->belongsTo('App\Procesador','id');
    }
    public function pantallas()
    {
        return $this->belongsTo('App\Pantalla','id');
    }
    public function origenes()
    {
        return $this->belongsTo('App\Origen','id');
    }
    public function proveedores()
    {
        return $this->belongsTo('App\Provedor','id');
    }
}
