<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsStrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews_strains', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('review_id');
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');
            $table->string('meta_key')->comment('effects, flavors, medical');

            // ID references Strain Taxonomies table (Blueberry, Relaxed, Cancer)
            $table->integer('meta_value')->unsigned();
            $table->foreign('meta_value')->references('id')->on('strains_taxonomies')->onDelete('cascade');
            
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
        Schema::dropIfExists('reviews_strains');
    }
}
