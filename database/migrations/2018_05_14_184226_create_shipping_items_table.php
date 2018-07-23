<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_items', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');

            $table->uuid('manifesto_id');
            $table->foreign('manifesto_id')->references('id')->on('shipping_manifestos')->onDelete('cascade');

            $table->uuid('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('posts')->onDelete('cascade');

            $table->string('uid_tag')->comment('References METRC tag num');
            $table->integer('qty_ordered');
            $table->integer('qty_received');
            $table->decimal('unit_cost', 10, 2);
            $table->decimal('total_cost', 10, 2);
            $table->decimal('unit_retail_price', 10, 2);
            $table->decimal('total_retail_price', 10, 2);
            $table->boolean('rejected')->default(false);
            $table->mediumText('description');

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
        Schema::dropIfExists('shipping_items');
    }
}
