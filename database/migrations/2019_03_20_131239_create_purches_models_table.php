<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchesModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purches_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Pnumber');
            $table->string('vendor_name');
            $table->string('purchase_date');
            $table->string('currency');
            $table->string('exdate');
            $table->string('note');
            $table->string('product');
            $table->string('description');
            $table->string('quantity');
            $table->string('price'); 
            $table->string('total');
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
        Schema::dropIfExists('purches_models');
    }
}
