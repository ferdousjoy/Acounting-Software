<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerrecordModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerrecord_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('billing_name');
            $table->string('billing_address');
            $table->string('billing_phone');
            $table->string('billing_email');
            $table->string('billing_warehouse');
            $table->string('billing_customers_no');
            $table->string('billing_reference');
            $table->string('billing_date');
            $table->string('billing_next_payment');
            $table->string('billing_tax');
            $table->string('billing_discount');
            $table->string('billing_note');
            $table->string('product_name');
            $table->string('billing_description');
            $table->string('product_quantity');
            $table->string('product_price');
            $table->string('payment_currency');
            $table->string('payment_terms');
            $table->string('payment_status');
            $table->string('stock_update');
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
        Schema::dropIfExists('customerrecord_models');
    }
}
