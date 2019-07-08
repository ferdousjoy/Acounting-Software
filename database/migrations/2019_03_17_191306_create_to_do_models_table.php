<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToDoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_do_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('task_title');
            $table->string('task_status');
            $table->string('task_priority');
            $table->string('task_start_date');
            $table->string('task_due_date');
            $table->string('task_assign_to');
            $table->string('task_description');
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
        Schema::dropIfExists('to_do_models');
    }
}
