<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->string('product_category');
            $table->string('product_warehouse');
            $table->string('product_code');
            $table->string('product_retail_price');
            $table->string('product_purchase_price');
            $table->string('product_tax_rate');
            $table->string('product_discount_rate');
            $table->string('product_stock_units');
            $table->string('product_alert_quantity');
            $table->string('product_measurement_units');
            $table->string('product_description');
            $table->string('product_expire_date');
        
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
        Schema::dropIfExists('product_models');
    }
}
