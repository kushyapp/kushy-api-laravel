<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUnitsOfWeightToInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inventory', function($table) { 
            $table->boolean('status')->default(true);
            $table->integer('stock')->default(1);
            $table->decimal('half_gram', 10, 2);
            $table->decimal('one_gram', 10, 2);
            $table->decimal('two_grams', 10, 2);
            $table->decimal('eighth_ounce', 10, 2);
            $table->decimal('quarter_ounce', 10, 2);
            $table->decimal('half_ounce', 10, 2);
            $table->decimal('ounce', 10, 2);
            $table->decimal('quarter_pound', 10, 2);
            $table->decimal('half_pound', 10, 2);
            $table->decimal('pound', 10, 2);
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
            $table->dropColumn('status');
            $table->dropColumn('stock');
            $table->dropColumn('half_gram');
            $table->dropColumn('one_gram');
            $table->dropColumn('two_grams');
            $table->dropColumn('eighth_ounce');
            $table->dropColumn('quarter_ounce');
            $table->dropColumn('half_ounce');
            $table->dropColumn('ounce');
            $table->dropColumn('quarter_pound');
            $table->dropColumn('half_pound');
            $table->dropColumn('pound');
        });
    }
}
