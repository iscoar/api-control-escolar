<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyPlanSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_plan_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('study_plan_id')->unsigned();
            $table->foreign('study_plan_id')->references('id')->on('study_plans');
            $table->BigInteger('grade_id')->unsigned();
            $table->foreign('grade_id')->references('id')->on('grades');
            $table->BigInteger('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subjects');
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
        Schema::dropIfExists('study_plan_subjects');
    }
}
