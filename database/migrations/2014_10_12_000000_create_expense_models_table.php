<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('particular');
            $table->integer('payment_mode');
            $table->string('amount'); 
            $table->string('cheque_no'); 
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
        Schema::dropIfExists('expense_models');
    }
}
