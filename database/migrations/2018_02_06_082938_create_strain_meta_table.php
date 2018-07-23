<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStrainMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strain_meta', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('post_id');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->string('meta_name')->comment('effects, flavors, medical');

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
        Schema::dropIfExists('strain_meta');
    }
}
