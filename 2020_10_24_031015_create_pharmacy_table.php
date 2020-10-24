<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacy', function (Blueprint $table) {
            $table->integer('idSede');
            $table->string('varSede');
            $table->string('varDireccion'); 
            $table->string('varDias');
            $table->string('varHorario');
            $table->int('Aforo');
            $table->boolean('bitApertura');
            $table->boolean('bitFuncionamiento');
            $table->integer('fkUbigeo')->unsigned();
            $table->foreign('fkUbigeo')->references('idUbigeo')->on('ubigeo');
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
        Schema::dropIfExists('pharmacy');
    }
}
