<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcesadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesadores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('codigo_cpu')->unique();
            $table->string('nombre_cpu',50);
            $table->string('categoria_cpu',20);
            $table->string('modelo_cpu',20);
            $table->string('frecuencia_cpu',20);
            $table->string('observaciones_cpu',512);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procesadores');
    }
}
