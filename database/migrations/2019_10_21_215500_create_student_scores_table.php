<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('ecp_id')->unsigned();
            $table->foreign('ecp_id')->references('id')->on('evaluation_criteria_percentages');
            $table->string('student_id', 10);
            $table->foreign('student_id')->references('id')->on('users');
            $table->double('score', 2,2);
            $table->integer('attendances');
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
        Schema::dropIfExists('student_scores');
    }
}
