<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cashier_id',10);
            $table->foreign('cashier_id')->references('id')->on('users');
            $table->string('student_id',10);
            $table->foreign('student_id')->references('id')->on('users');
            $table->unsignedBigInteger('payment_concept_id');
            $table->foreign('payment_concept_id')->references('id')->on('payment_concepts');
            $table->enum('payment_type',['Efectivo', 'Tarjeta de Crédito', 'Paypal'])->nullable();
            $table->double('surcharge',8,2)->nullable();
            $table->double('discount',8,2)->nullable();
            $table->double('grant',8,2)->nullable();
            $table->double('total',8,2)->nullable();
            $table->enum('status',['PENDIENTE', 'PAGADO', 'CONVENIO'])->nullable();
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
        Schema::dropIfExists('student_payments');
    }
}
