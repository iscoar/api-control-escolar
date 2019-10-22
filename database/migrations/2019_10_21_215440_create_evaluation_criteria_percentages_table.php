<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationCriteriaPercentagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_criteria_percentages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('evaluation_levels_id')->unsigned();
            $table->foreign('evaluation_levels_id')->references('id')->on('group_evaluation_levels');
            $table->BigInteger('evaluation_criteria_id')->unsigned();
            $table->foreign('evaluation_criteria_id')->references('id')->on('evaluation_criteria');
            $table->double('percentage', 3,2);
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
        Schema::dropIfExists('evaluation_criteria_percentages');
    }
}
