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
        Schema::create('evaluacion_pregunta', function (Blueprint $table) {
            $table->id();
            $table->decimal("calificacion", 10, 2)->nullable();
            $table->bigInteger("evaluacion_id")->unsigned();
            $table->foreign("evaluacion_id")->references("id")->on("evaluacions");

            $table->bigInteger("pregunta_id")->unsigned();
            $table->foreign("pregunta_id")->references("id")->on("preguntas");
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
        Schema::dropIfExists('evaluacion_pregunta');
    }
};
