<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingManifestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_manifestos', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');

            $table->uuid('shipper_id')->nullable();
            $table->foreign('shipper_id')->references('id')->on('posts')->onDelete('cascade');
            $table->string('shipper_state_license');
            $table->string('shipper_name');
            $table->string('shipper_address');
            $table->string('shipper_city');
            $table->string('shipper_state');
            $table->string('shipper_postal_code');
            $table->string('shipper_phone');
            

            $table->uuid('receiver_id')->nullable();
            $table->foreign('receiver_id')->references('id')->on('posts')->onDelete('cascade');
            $table->string('receiver_state_license');
            $table->string('receiver_name');
            $table->string('receiver_address');
            $table->string('receiver_city');
            $table->string('receiver_state');
            $table->string('receiver_postal_code');
            $table->string('receiver_phone');
            $table->string('receiver_email');
            
            $table->uuid('distributor_id')->nullable();
            $table->foreign('distributor_id')->references('id')->on('posts')->onDelete('cascade');
            $table->string('distributor_state_license');
            $table->string('distributor_name');
            $table->string('distributor_address');
            $table->string('distributor_city');
            $table->string('distributor_state');
            $table->string('distributor_postal_code');
            $table->string('distributor_phone');
            $table->string('distributor_email');
            
            $table->uuid('delivery_id')->nullable();
            $table->foreign('delivery_id')->references('id')->on('delivery_drivers')->onDelete('cascade');
            
            $table->uuid('owner_id')->nullable();
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');


            $table->string('invoice');
            $table->string('status')->default('processing')->comment('processing, delivered, cancelled');
            $table->longText('description')->nullable();
            $table->string('contact_name');
            $table->string('phone');
            $table->dateTime('date_departure');
            $table->dateTime('date_estimated_arrival');
            $table->dateTime('date_actual_arrival');
            $table->dateTime('date_signed');
            $table->string('digital_signature');

            $table->string('access_token', 255);

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
        Schema::dropIfExists('shipping_manifestos');
    }
}
