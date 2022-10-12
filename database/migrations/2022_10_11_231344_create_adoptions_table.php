<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoptions', function (Blueprint $table) {
            //
            $table->id();
            $table->string('numeroDocumento',45);
            $table->string('nombre',45);
            $table->string('apellidos',45);
            $table->date('fechaNacimiento');
            $table->integer('numeroPersonasReside');
            $table->string('contactoEmpresa',45);
            $table->string('celular',45);
            $table->string('correo',45);
            $table->string('direccion',45);
            $table->string('empresaTrabaja',45);
            $table->string('sueldo',45);
            $table->string('estado',45);
            $table->foreignId('pet_id')->constrained();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('adoptions');
    }
};
