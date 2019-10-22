<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 30)->nullable();
            $table->enum('academic_period', ['Mensual', 'Bimestre', 'Trimestre', 'Cuatrimestre', 'Semestre', 'Anual']);
            $table->integer('duration');
            $table->double('minimum_score', 2,2);
            $table->double('minimum_attendance',3,2);
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
        Schema::dropIfExists('levels');
    }
}
