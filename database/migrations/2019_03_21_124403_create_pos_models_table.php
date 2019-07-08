<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('estimate_number');
            $table->string('customer');
            $table->string('date');
            $table->string('subheading');
            $table->string('currency');
            $table->string('exdate');
            $table->string('memo'); 
            $table->string('description');
            $table->string('product_price');
            $table->string('product'); 
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
        Schema::dropIfExists('pos_models');
    }
}
