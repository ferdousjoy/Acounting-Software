<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_no');
            $table->string('name');
            $table->integer('initial_balance');
            $table->string('notes');
            $table->string('business_location');
            $table->string('account_type');
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
        Schema::dropIfExists('account_models');
    }
}
