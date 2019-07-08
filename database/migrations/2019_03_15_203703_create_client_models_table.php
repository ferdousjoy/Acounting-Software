<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('billing_name');
            $table->string('billing_email')->unique();
            $table->string('billing_phone');
            $table->text('billing_address');
            $table->string('billing_city');
            $table->string('billing_region');
            $table->string('billing_country');
            $table->string('billing_post');
            $table->string('billing_company');
            $table->string('billing_taxid');
            $table->string('billing_companygroup');
            $table->string('shipping_name');
            $table->string('shipping_email')->unique();
            $table->string('shipping_phone');
            $table->text('shipping_address');
            $table->string('shipping_city');
            $table->string('shipping_region');
            $table->string('shipping_country');
            $table->string('shipping_post');
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
        Schema::dropIfExists('client_models');
    }
}
