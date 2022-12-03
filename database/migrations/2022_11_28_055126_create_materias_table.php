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
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->string('gestion')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            
            $table->bigInteger("docente_id")->unsigned();
            $table->foreign("docente_id")->references("id")->on("docentes");

            $table->bigInteger("evaluacion_id")->unsigned()->nullable();
            $table->foreign("evaluacion_id")->references("id")->on("evaluacions");

            $table->bigInteger("carrera_id")->unsigned()->nullable();
            $table->foreign("carrera_id")->references("id")->on("carreras");

            $table->bigInteger("semestre_id")->unsigned()->nullable();
            $table->foreign("semestre_id")->references("id")->on("semestres");

            $table->bigInteger("turno_id")->unsigned()->nullable();
            $table->foreign("turno_id")->references("id")->on("turnos");

            $table->bigInteger("paralelo_id")->unsigned()->nullable();
            $table->foreign("paralelo_id")->references("id")->on("paralelos");
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
        Schema::dropIfExists('materias');
    }
};
