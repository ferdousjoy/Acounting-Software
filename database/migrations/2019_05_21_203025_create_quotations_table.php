<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('quotation_no',32);
            $table->integer('customer_id');
            $table->string('purchase_date',12);
            $table->string('purchase_exdate',12);
            $table->string('currency',30);
            $table->text('memo')->nullable();
			$table->integer('product_id');
            $table->text('description')->nullable();
            $table->integer('quantity')->default(0);
			$table->float('price', 8, 2)->default(0.00);
			$table->float('tax', 6, 2)->default(0.00);
			$table->float('total', 10, 2)->default(0.00);
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
        Schema::dropIfExists('quotations');
    }
}
