<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveForeignKeyFromStores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {
           // Remove the foreign key constraint
           $table->dropForeign(['shop_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stores', function (Blueprint $table) {
             // Re-add the foreign key constraint if you ever need to rollback the migration
             $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });
    }
}
