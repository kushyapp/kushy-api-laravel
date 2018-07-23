<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_permissions', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');

            // Business ID
            $table->uuid('business_id');
            $table->foreign('business_id')->references('id')->on('posts')->onDelete('cascade');

            // User ID
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            // Verified to control business?
            $table->boolean('verified')->default(false);
            $table->string('user_type')->default('employee')->comment('owner, employee, representative');
            // JSON object with permissions
            $table->longText('permissions');

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
        Schema::dropIfExists('users_permissions');
    }
}
