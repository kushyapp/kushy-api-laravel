<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');

            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->uuid('shop_id');
            $table->foreign('shop_id')->references('id')->on('posts')->onDelete('cascade');

            /** 
             * Integer to save space
             * 
             * Reference:
             * pending
             * payment-made
             * processing
             * delivery
             * shipped
             * complete
             * cancelled
             * refunded
             * 
             */
            $table->string('status')->default(0);
            $table->integer('total_price')->default(0);

            // TEXT based field for JSON array of discount objects
            $table->text('discount')->nullable();

            $table->integer('final_price')->default(0);

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
        Schema::dropIfExists('orders');
    }
}
