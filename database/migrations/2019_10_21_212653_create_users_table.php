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
            $table->string('id',10)->primary();
            $table->enum('role', ['ROLE_STUDENT', 'ROLE_TEACHER', 'ROLE_CASHIER']);
            $table->string('name',60);
            $table->string('last_name',60);
            $table->string('second_last_name',60);
            $table->enum('gender', ['Hombre', 'Mujer']);
            $table->date('birthday')->nullable();
            $table->enum('nationality', ['Mexicana', 'Estadounidense', 'Extranjera'])->nullable();
            $table->char('curp',18)->nullable();
            $table->date('admission_date')->nullable();
            $table->char('insurance',11)->nullable();
            $table->string('email',100)->nullable();
            $table->bigInteger('phone')->nullable();
            $table->integer('outdoor_number')->nullable();
            $table->char('interior_number',1)->nullable();
            $table->string('street')->nullable();
            $table->string('locality',60)->nullable();
            $table->string('neighborhood',70)->nullable();
            $table->smallInteger('postal_code')->nullable();
            $table->unsignedBigInteger('current_township_id');
            $table->foreign('current_township_id')->references('id')->on('townships');
            $table->unsignedBigInteger('birthday_place');
            $table->foreign('birthday_place')->references('id')->on('townships');
            $table->char('rfc',14)->nullable();
            $table->enum('status', ['Activo', 'Inactivo'])->nullable();
            $table->string('password');
            $table->string('remember_token')->nullable();
            $table->timestamps();
            //$table->string('enrollment', 10)->unique();
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
