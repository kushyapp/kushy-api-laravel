<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('name');
            $table->string('section')->comment('shop, brand, strain, product, etc');
            $table->string('slug')->unique()->index();
            $table->string('avatar')->nullable();
            $table->string('featured_img')->nullable();
            $table->longText('description')->nullable();

            // Location Data
            $table->decimal('latitude', 10, 7)->default(0)->nullable();
            $table->decimal('longitude', 10, 7)->default(0)->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country')->nullable();

            // JSON Object with social media usernames
            $table->longText('social')->nullable();


            $table->boolean('featured')->default(false);
            $table->boolean('verified')->default(false);
            $table->integer('rating')->default(0);

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
        Schema::dropIfExists('posts');
    }
}
