<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_trans', function (Blueprint $table) {
            $table->id();
            $table->string('moduleid')->nullable();
            $table->string('tranid')->nullable();
            $table->string('amount')->nullable();
            $table->string('crdr')->nullable();
            $table->string('tranDate')->nullable();
            $table->string('acadYear')->nullable();
            $table->string('entrymode')->nullable();
            $table->string('voucherno')->nullable();
            $table->string('brid')->nullable();
            $table->string('due_amount')->nullable();
            $table->string('concession_amount/scholarship')->nullable();
            $table->string('duerev(writeoff)')->nullable();
            $table->string('concession/scholarship rev')->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financial_trans');
    }
}
