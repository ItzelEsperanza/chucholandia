<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_hora');
        

            $table->unsignedBigInteger('cliente_id'); //FK cliente
            $table->unsignedBigInteger('mascota_id'); //FK mascota
            $table->unsignedBigInteger('servicio_id'); //FK servicio

            $table->foreign('cliente_id')
            ->references('id')
            ->on('clientes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('mascota_id')
            ->references('id')
            ->on('mascotas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

             $table->foreign('servicio_id')
            ->references('id')
            ->on('servicios')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('citas');
    }
}
