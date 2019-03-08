<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariosTable extends Migration
{
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_inventario')->nullable();
            $table->unsignedInteger('codigo_marca_inventario')->nullable();
            $table->unsignedInteger('codigo_modelo_inventario')->nullable();
            $table->integer('numero_serie_inventario')->nullable();
            $table->unsignedInteger('codigo_cpu_inventario')->nullable();
            $table->unsignedInteger('codigo_pantalla_inventario')->nullable();
            $table->unsignedInteger('codigo_origen_inventario')->nullable();
            $table->unsignedInteger('codigo_proveedor_inventario')->nullable();
            $table->unsignedInteger('codigo_estado_inventario')->nullable();
            $table->date('fecha_entrada_inventario')->nullable();
            $table->date('fecha_salida_inventario')->nullable();
            $table->integer('garantia_inventario')->nullable();
            $table->string('observaciones_inventario')->nullable();
            $table->timestamps();
            $table->foreign('codigo_marca_inventario')->references('id')->on('marcas');
            $table->foreign('codigo_modelo_inventario')->references('id')->on('modelos');
            $table->foreign('codigo_cpu_inventario')->references('id')->on('procesadores');
            $table->foreign('codigo_pantalla_inventario')->references('id')->on('pantallas');
            $table->foreign('codigo_origen_inventario')->references('id')->on('origenes');
            $table->foreign('codigo_proveedor_inventario')->references('id')->on('proveedores');
            $table->foreign('codigo_estado_inventario')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
}
