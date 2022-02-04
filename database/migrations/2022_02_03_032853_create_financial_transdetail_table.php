<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialTransdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_transdetail', function (Blueprint $table) {
            $table->id();
            $table->string('financialTranId')->nullable();
            $table->string('moduleId')->nullable();
            $table->string('amount')->nullable();
            $table->string('headId')->nullable();
            $table->string('crdr')->nullable();
            $table->string('brId')->nullable();
            $table->string('head_name')->nullable();
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
        Schema::dropIfExists('financial_transdetail');
    }
}
