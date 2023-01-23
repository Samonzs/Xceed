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

        Schema::create('VariationDetails', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('clientEmail');
            $table->integer('phoneNumber');
            $table->date('date');
            $table->string('companyName');
            $table->integer('abn');
            $table->string('addressLine');
            $table->string('suburb');
            $table->integer('postcode');
            $table->integer('jobReferenceNumber');
            $table->integer('orderNumber');
            $table->string('siteName');
            $table->string('siteAddressLine');
            $table->string('siteAddressState');
            $table->integer('sitePostcode');
            $table->string('variationItem');
            $table->integer('variationItemPrice');
            $table->string('variationDescription')->nullable();
            $table->integer('totalCost');
            $table->Date('variationDateRequest');
            $table->timestamps();
            $table->string('createdBy');
            $table->integer('approveStatus');

        });

        Schema::create('TermsAndConditions', function (Blueprint $table) {
            $table->id();
            $table->longText('TermsAndConditions');
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
        Schema::dropIfExists('clientDetails');
        Schema::dropIfExists('clientSiteDetails');
        Schema::dropIfExists('TermsAndConditions');


    }
};