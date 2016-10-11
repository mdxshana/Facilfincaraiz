<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriaPortadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria_portadas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ruta');
            $table->enum('tipo',['S','V','I','T']); //S->slaider , V->vehiculo , I-> inmueble , T-> terreno
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
        Schema::drop('galeria_portadas');
    }
}
