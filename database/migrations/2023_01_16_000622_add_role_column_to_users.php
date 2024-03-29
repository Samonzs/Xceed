<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['user','admin'])->default('user');
        });

        Schema::table('variationDetails', function (Blueprint $table) {
            $table->enum('approveStatus', ['0','1'])->default('0');
        });

        Schema::table('variationDetails', function (Blueprint $table) {
            $table->string('signatureUpload')->default('');
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
            $table->dropColumn('role');
        });

        Schema::table('variationDetails', function (Blueprint $table) {
            $table->dropColumn('approveStatus');
        });

        Schema::table('variationDetails', function (Blueprint $table) {
            $table->dropColumn('signatureUpload');
        });
    }
}
