<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChequeModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheque_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('price');
            $table->integer('date');
            $table->string('invoice-no'); 
            $table->string('purpose'); 
            $table->string('cheque_no'); 
            $table->string('bank_list'); 
            $table->string('branch'); 
            $table->string('cheque_date'); 
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
        Schema::dropIfExists('cheque_models');
    }
}
