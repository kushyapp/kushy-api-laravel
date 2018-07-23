<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUnitsOfWeightNullableOnInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inventory', function($table) { 
            $table->decimal('half_gram', 10, 2)->default(0)->change();
            $table->decimal('one_gram', 10, 2)->default(0)->change();
            $table->decimal('two_grams', 10, 2)->default(0)->change();
            $table->decimal('eighth_ounce', 10, 2)->default(0)->change();
            $table->decimal('quarter_ounce', 10, 2)->default(0)->change();
            $table->decimal('half_ounce', 10, 2)->default(0)->change();
            $table->decimal('ounce', 10, 2)->default(0)->change();
            $table->decimal('quarter_pound', 10, 2)->default(0)->change();
            $table->decimal('half_pound', 10, 2)->default(0)->change();
            $table->decimal('pound', 10, 2)->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventory', function($table) {
            $table->decimal('half_gram', 10, 2)->change();
            $table->decimal('one_gram', 10, 2)->change();
            $table->decimal('two_grams', 10, 2)->change();
            $table->decimal('eighth_ounce', 10, 2)->change();
            $table->decimal('quarter_ounce', 10, 2)->change();
            $table->decimal('half_ounce', 10, 2)->change();
            $table->decimal('ounce', 10, 2)->change();
            $table->decimal('quarter_pound', 10, 2)->change();
            $table->decimal('half_pound', 10, 2)->change();
            $table->decimal('pound', 10, 2)->change();
        });
    }
}
