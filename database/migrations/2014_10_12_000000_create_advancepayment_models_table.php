<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvancepaymentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advancepayment_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('account_head');
            $table->integer('particular');
            $table->string('payment_mode'); 
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
        Schema::dropIfExists('vendorstatemen_models');
    }
}
