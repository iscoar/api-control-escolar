<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id', 10);
            $table->foreign('user_id')->references('id')->on('users');
            $table->BigInteger('document_id')->unsigned();
            $table->foreign('document_id')->references('id')->on('documents');
            $table->datetime('date');
            $table->enum('status',['Entregado', 'Por entregar']);
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
        Schema::dropIfExists('user_documents');
    }
}
