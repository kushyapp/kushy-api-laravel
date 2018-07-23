<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocationSocialAndImagesToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->decimal('latitude', 10, 7)->default('0');
            $table->decimal('longitude', 10, 7)->default('0');
            // JSON with social media
            $table->longText('social')->nullable();
            $table->string('profile_pic')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
            $table->dropColumn('social');
            $table->dropColumn('profile_pic');
        });
    }
}
