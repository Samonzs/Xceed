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
            $table->integer('phone number');
            $table->date('date');
            $table->string('company name');
            $table->integer('abn');
            $table->string('address line');
            $table->string('suburb');
            $table->integer('postcode');
            $table->timestamps();
        });

        Schema::create('clientSiteDetails', function (Blueprint $table) {
            $table->id();
            $table->integer('job reference number');
            $table->integer('order number');
            $table->string('site name');
            $table->string('site address line');
            $table->string('site address state');
            $table->integer('site postcode');
            $table->string('variation item');
            $table->integer('variation item price');
            $table->string('variation description');
            $table->integer('total cost');
            $table->Date('variation date request');
            $table->timestamps();
        });

        Schema::create('TermsAndConditions', function (Blueprint $table) {
            $table->id();
            $table->string('TermsAndConditions');
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
        Schema::dropIfExists('clientDetails');
        Schema::dropIfExists('clientSiteDetails');
        Schema::dropIfExists('TermsAndConditions');


    }
};