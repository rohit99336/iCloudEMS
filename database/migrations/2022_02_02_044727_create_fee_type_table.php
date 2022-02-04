<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_type', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('moduleid')->nullable();
            // $table->enum('inactve',['0','1']);
            // $table->enum('isRefundable',['0','1']);
            // $table->integer('isScholarship')->nullable();
            // $table->integer('sequenceNo')->nullable();
            // $table->string('feeTypeName')->nullable();
            // $table->string('feeTypeNameTally')->nullable();
            //$table->timestamps();

            $table->string('fee_category')->nullable();
            $table->string('f_name')->nullable();
            $table->string('collection_id')->nullable();
            $table->string('br_id')->nullable();
            $table->string('seq_id')->nullable();
            $table->string('fee_type_ledger')->nullable();
            $table->string('fee_headtype')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fee_type');
    }
}
