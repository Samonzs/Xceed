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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('staff_fname');
            $table->string('staff_lname');
            $table->string('staff_email');
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('clientDetails', function (Blueprint $table) {
            $table->id();
            $table->string('first name');
            $table->string('last name');
            $table->string('client email');
            $table->int('phone number');
            $table->date('date');
            $table->string('company name');
            $table->int('abn');
            $table->string('address line');
            $table->string('suburb');
            $table->int('postcode');
            $table->timestamps();
        });

        Schema::create('clientSiteDetails', function (Blueprint $table) {
            $table->id();
            $table->int('job reference number');
            $table->int('oder number');
            $table->string('site name');
            $table->string('site address line');
            $table->string('site address state');
            $table->int('site postcode');
            $table->string('variation item');
            $table->int('variation item price');
            $table->string('variation description');
            $table->int('total cost');
            $table->Date('variation date request');




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
        Schema::dropIfExists('users');
    }
};
