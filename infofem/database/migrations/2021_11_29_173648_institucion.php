<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Institucion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('institucion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('direccion',300);
            $table->string('cp',50);
            $table->string('telefono',50)->nullable();
            $table->string('correo')->nullable();
            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id')->on('estado');
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
        //
    }
}
