<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject');
            $table->text('problem');
            $table->text('screen_shot');
            $table->text('status');
            $table->text('problem_sender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_models');
    }
}
