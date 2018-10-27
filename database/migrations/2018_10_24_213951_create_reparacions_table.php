<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReparacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Descripcion');
            $table->string('Precio');
            $table->timestamp('Fecha');
            $table->integer('id_vehiculo')->unsigned();
            $table->timestamps();

            $table->foreign('id_vehiculo')->references('id')->on('vehiculos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reparacions');
    }
}
