<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('second_last_name');
            $table->enum('role', ['ROLE_STUDENT', 'ROLE_TEACHER']);
            $table->enum('gender', ['Hombre', 'Mujer']);
            $table->date('birthday')->nullable();
            $table->string('nationality')->nullable();
            $table->string('curp')->nullable();
            $table->string('insurance')->nullable();
            $table->string('enrollment', 10)->unique();
            $table->string('password');
            $table->string('remember_token')->nullable();
            $table->date('admission_date')->nullable();
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
        Schema::dropIfExists('users');
    }
}
