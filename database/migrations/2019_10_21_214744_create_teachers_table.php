<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id',10)->unique();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('professional_id')->nullable();
            $table->enum('scholarship',['LICENCIATURA', 'INGENIERÍA', 'MAESTRÍA', 'ESPECIALIDAD', 'DOCTORADO']);
            $table->string('career', 60);
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
        Schema::dropIfExists('teachers');
    }
}
