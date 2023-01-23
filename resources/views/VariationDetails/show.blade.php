@extends('VariationDetails.layout')
@section('content')
 

<div class="card">
  <div class="card-header"> <h1>Show Details</h1> </div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-title"> <strong>First Name</strong> : {{ $VariationDetails->firstName }}</p><p class="card-title"><strong>Last Name</strong>: {{ $VariationDetails->lastName }}</p>
            <p class="card-text"><strong>Client Email</strong>: {{ $VariationDetails->clientEmail }}</p>
            <p class="card-text"><strong>Company Name</strong>: {{ $VariationDetails->companyName }}</p>
            <p class="card-text"><strong>ABN</strong>: {{ $VariationDetails->abn }}</p>
            <p class="card-text"><strong>Address Line</strong>: {{ $VariationDetails->addressLine }}</p>
            <p class="card-text"><strong>Suburb</strong>: {{ $VariationDetails->suburb }}</p>
            <p class="card-text"><strong>Postcode</strong>: {{ $VariationDetails->postcode }}</p>
            <p class="card-text"><strong>Job Reference Number</strong>: {{ $VariationDetails->jobReferenceNumber }}</p>
            <p class="card-text"><strong>Order Number</strong>: {{ $VariationDetails->orderNumber }}</p>
            <p class="card-text"><strong>Site Name</strong>: {{ $VariationDetails->siteName }}</p>
            <p class="card-text"><strong>Site Address Line</strong>: {{ $VariationDetails->siteAddressLine }}</p>
            <p class="card-text"><strong>Site Address State</strong>: {{ $VariationDetails->siteAddressState }}</p>
            <p class="card-text"><strong>Site Postcode</strong>: {{ $VariationDetails->sitePostcode }}</p>
            <p class="card-text"><strong>Vriation Description</strong>: {{ $VariationDetails->variationDescription }}</p>
            <p class="card-text"><strong>Total Cost</strong>: {{ $VariationDetails->totalCost }}</p>
            <p class="card-text"><strong>Variation Date Request</strong>: {{ $VariationDetails->variationDateRequest }}</p>
            <a href="<?php echo url('/lov')?>"><button class="btn btn-secondary btn-info btn-sm">Back</button></a>
        </div>
  </div>
</div>