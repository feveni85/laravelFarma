<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->integer('idPersonal');
            $table->string('varNombre');
            $table->date('datFechanacimiento'); 
            $table->string('varDireccion');
            $table->boolean('bitSexo');
            $table->boolean('bitEstado');
            $table->integer('fkEspecialidad')->unsigned();
            $table->foreign('fkEspecialidad')->references('idEspecialidad')->on('specialties');
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
        Schema::dropIfExists('personal');
    }
}
