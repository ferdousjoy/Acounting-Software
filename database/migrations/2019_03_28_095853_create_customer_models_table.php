<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cutomer_name');
            $table->string('cutomer_email');
            $table->string('cutomer_phone');
            $table->string('cutomer_address');
            $table->string('billing_currency');
            $table->string('billing_address');
            $table->string('billing_address2');
            $table->string('billing_city');
            $table->string('billing_country');
            $table->string('billing_post');
            $table->string('shipping_account');
            $table->string('shipping_country');
            $table->text('shipping_address');
            $table->text('shipping_address3');
            $table->string('shipping_city');
            $table->string('shipping_post');
            $table->string('shipping_phone');
            $table->string('shipping_delivery');
            $table->string('other_account_number');
            $table->string('other_fax_number');
            $table->string('other_toll');
            $table->string('other_website');
            $table->string('other_internal');
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
        Schema::dropIfExists('customer_models');
    }
}
