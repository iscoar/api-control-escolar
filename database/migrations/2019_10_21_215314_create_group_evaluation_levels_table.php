<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupEvaluationLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_evaluation_levels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('stg_id')->unsigned();
            $table->foreign('stg_id')->references('id')->on('subject_teacher_groups');
            $table->BigInteger('level_evaluation_id')->unsigned();
            $table->foreign('level_evaluation_id')->references('id')->on('evaluation_levels');
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
        Schema::dropIfExists('group_evaluation_levels');
    }
}
