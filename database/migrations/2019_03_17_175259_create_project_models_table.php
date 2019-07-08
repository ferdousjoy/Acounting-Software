<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_title');
            $table->string('project_status');
            $table->string('project_progress');
            $table->string('project_priority');
            $table->string('project_customer');
            $table->string('project_customer_view');
            $table->string('project_customer_comment');
            $table->string('project_budget');
            $table->string('project_start_date');
            $table->string('project_due_date');
            $table->string('project_assign_to');
            $table->string('project_phase');
            $table->string('project_link_to_calender');
            $table->string('project_tags');
            $table->text('project_notes');
            $table->text('project_task_communication');
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
        Schema::dropIfExists('project_models');
    }
}
