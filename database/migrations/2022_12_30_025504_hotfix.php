<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /*  Schema::table('clientSiteDetails', function (Blueprint $table) {
           
            $table->string('Terms and Conditions'); // adding terms of conditions as its own column in clientSiteDetails table
          
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('clientSiteDetails', function (Blueprint $table) {
           
        //     $table->string('Terms and Conditions'); // adding terms of conditions as its own column in clientSiteDetails table
          
        // });

    }
};
