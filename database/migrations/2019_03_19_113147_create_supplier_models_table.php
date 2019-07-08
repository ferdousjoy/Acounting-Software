<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('company');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('region');
            $table->string('country');
            $table->string('postbox');
            $table->string('tax');
            $table->string('image');
            $table->string('status')->default('1');
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
        Schema::dropIfExists('supplier_models');
    }
}
