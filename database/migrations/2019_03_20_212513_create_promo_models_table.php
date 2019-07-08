<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('promo_code');
            $table->string('promo_amount');
            $table->string('promo_quantity');
            $table->string('promo_valid');
            $table->string('promo_link_account');
            $table->string('promo_account');
            $table->string('promo_note');
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
        Schema::dropIfExists('promo_models');
    }
}
