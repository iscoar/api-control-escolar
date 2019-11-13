<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',30);
            $table->enum('type',['Interna', 'Externa']);
            $table->enum('discount_type',['Percentage', 'Cash']);
            $table->double('amount',6,2);
            $table->enum('duration',['Level', 'Cycle']);
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
        Schema::dropIfExists('grants');
    }
}
