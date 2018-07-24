<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');

            $table->uuid('product_id');
            $table->foreign('product_id')->references('id')->on('posts')->onDelete('cascade');

            $table->uuid('business_id');
            $table->foreign('business_id')->references('id')->on('posts')->onDelete('cascade');

            // Product Description
            $table->longText('description');

            // PRICING
            $table->string('pricing_type')->comment('Setting to assign pricing type (e.g. gram vs per unit)');
            $table->decimal('list_price', 10, 2)->nullable();
            $table->decimal('sale_price', 10, 2)->nullable();

            // Average Cannabinoid Percentages
            // Manually input by user to override strain info
            $table->decimal('thc', 5, 2)->nullable();
            $table->decimal('cbd', 5, 2)->nullable();
            $table->decimal('cbn', 5, 2)->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('inventory');
    }
}
