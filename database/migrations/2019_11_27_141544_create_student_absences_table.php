<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_absences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_id', 10);
            $table->foreign('student_id')->references('id')->on('users');  
            $table->unsignedBigInteger('gel_id');
            $table->foreign('gel_id')->references('id')->on('group_evaluation_levels');
            $table->integer('absences');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_absences');
    }
}
