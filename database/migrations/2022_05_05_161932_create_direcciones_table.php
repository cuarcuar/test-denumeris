<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado', 255);
            $table->string('municipio', 255);
            $table->string('direccion', 255);
            $table->integer('codigo_postal')->unsigned();
            $table->double('longitud');
            $table->double('latitud');
            $table->double('regular', 10,2);
            $table->double('premium', 10,2);
            $table->double('diesel', 10,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direcciones');
    }
}
