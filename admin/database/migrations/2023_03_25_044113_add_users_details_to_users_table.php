<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersDetailsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable()->default('users/default.png')->after('email');
            $table->text('settings')->nullable()->after('avatar');
            $table->string('phone')->after('settings');
            $table->string('dob')->nuclearllable()->after('phone');
            $table->string('address')->nullable()->after('dob');
            $table->string('country')->nullable()->after('address');
            $table->string('country_code')->nullable()->after('country');
            $table->string('currency_code')->nullable()->after('country_code');
            $table->string('post_code')->nullable()->after('currency_code');
            $table->string('company_name')->nullable()->after('post_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['avatar', 'settings', 'phone', 'dob', 'address', 'country', 'country_code', 'currency_code', 'post_code', 'company_name']);
        });
    }
}
