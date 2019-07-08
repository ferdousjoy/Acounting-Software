<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('date');
            $table->string('invoice-no');
            $table->string('purpose');
            $table->string('price'); 
            $table->string('remarks'); 
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
        Schema::dropIfExists('cash_models');
    }
}
