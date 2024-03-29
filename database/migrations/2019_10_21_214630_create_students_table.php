<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id',10)->unique();
            $table->foreign('user_id')->references('id')->on('users');
            $table->smallInteger('egetsu_rating')->nullable();
            $table->enum('status',['ACTIVO','BAJA TEMPORAL','BAJA DEFINITIVA', 'EGRESADO', 'REINGRESO', 'BLOQUEADO']);
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
        Schema::dropIfExists('students');
    }
}
