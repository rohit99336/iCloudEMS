<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_category', function (Blueprint $table) {
            $table->id();
            $table->string('fee_category')->nullable();
            // $table->string('description')->nullable();
            // $table->dateTime('date_created')->nullable();
            // $table->string('user_created')->nullable();
            // $table->string('actve')->nullable();
            // $table->string('fee_code')->nullable();
            $table->foreignId('br_id')->nullable();
            // $table->foreignId('user_id')->nullable();
            // $table->string('Alloted Category')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fee_category');
    }
}
