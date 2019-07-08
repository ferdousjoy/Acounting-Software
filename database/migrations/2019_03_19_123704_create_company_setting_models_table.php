<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanySettingModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_setting_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('company_city');
            $table->string('company_region');
            $table->string('company_country');
            $table->string('company_postbox');
            $table->string('company_phone');
            $table->string('company_email');
            $table->string('company_tax');
            $table->string('company_logo');
            $table->string('company_data_share');
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
        Schema::dropIfExists('company_setting_models');
    }
}
