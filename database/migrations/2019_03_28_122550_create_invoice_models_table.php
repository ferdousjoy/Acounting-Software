<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('chalan_name');
            $table->string('chalan_id');
            $table->string('customer_name');
            $table->string('driver_name');
            $table->string('shipping_address');
            $table->string('driver_mobile');
            $table->string('date');
            $table->string('track_number');
            $table->string('product');
            $table->text('description');
            $table->string('quantity');
            $table->string('price');
            $table->string('ammount');
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
        Schema::dropIfExists('invoice_models');
    }
}
