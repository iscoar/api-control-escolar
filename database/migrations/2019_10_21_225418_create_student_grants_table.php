<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentGrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_grants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_id',10);
            $table->foreign('student_id')->references('id')->on('users');
            $table->unsignedBigInteger('grant_id');
            $table->foreign('grant_id')->references('id')->on('grants');
            $table->unsignedBigInteger('cycle_id');
            $table->foreign('cycle_id')->references('id')->on('cycles');
            $table->date('end_date');
            $table->enum('status',['Activo', 'Inactivo']);
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
        Schema::dropIfExists('student_grants');
    }
}
