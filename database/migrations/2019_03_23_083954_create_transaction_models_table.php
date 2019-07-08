<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('supplier');
            $table->string('name');
            $table->string('account');
            $table->string('amount');
            $table->string('date');
            $table->string('type');
            $table->string('category');
            $table->string('method');
            $table->string('note');
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
        Schema::dropIfExists('transaction_models');
    }
}
