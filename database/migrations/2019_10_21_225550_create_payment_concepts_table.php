<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentConceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_concepts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',50);
            $table->date('expires_date')->nullable();
            $table->unsignedBigInteger('cycle_id');
            $table->foreign('cycle_id')->references('id')->on('cycles');
            $table->double('amount',8,2);
            $table->enum('type',['TRÁMITE', 'COLEGIATURA', 'INSCRIPCIÓN', 'MULTA']);
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
        Schema::dropIfExists('payment_concepts');
    }
}
