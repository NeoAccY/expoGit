<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Equipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('imagen')->nullable();
            $table->string('nombre_Equipo', 30);
            $table->string('marca_Equipo', 30);
            $table->string('modelo_Equipo', 30);
            $table->integer('inventario_Area')->nullable();
            $table->date('fecha_compra')->nullable();
            $table->string('area', 30)->nullable();
            $table->string('laboratorio', 30)->nullable();
            $table->integer('calificacion_op')->nullable();
            $table->string('calibracion', 30)->nullable();
            $table->date('ultima_calibracion')->nullalbe();
            $table->boolean('calibrado')->nullable();
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
        Schema::dropIfExists('equipos');
    }
}
