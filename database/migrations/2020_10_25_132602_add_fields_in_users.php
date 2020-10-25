<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsInUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname')->after('name');
            $table->string('phone')->unique()->after('lastname');
            $table->string('image')->nullable()->after('email');
            $table->renameColumn('email_verified_at', 'phone_verified_at');
            $table->renameColumn('name', 'firstname');

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
            $table->dropColumn('lastname');
            $table->dropColumn('phone');
            $table->renameColumn('phone_verified_at', 'email_verified_at');
            $table->renameColumn('firstname', 'name');
            $table->dropColumn('image');
        });
    }
}
