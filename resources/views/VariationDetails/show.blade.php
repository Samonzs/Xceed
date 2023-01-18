@extends('VariationDetails.layout')
@section('content')
 

<div class="card">
  <div class="card-header">Show Details</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">First Name : {{ $VariationDetails->firstName }}</h5>
            <h5 class="card-title"> Last Name: {{ $VariationDetails->lastName }}</h5>
            <p class="card-text">Job Reference Number: {{ $VariationDetails->jobReferenceNumber }}</p>
            <p class="card-text">Variation Date Request: {{ $VariationDetails->variationDateRequest }}</p>
            <a href="<?php echo url('/lov')?>"><button class="btn btn-secondary btn-info btn-sm">Back</button></a>
        </div>
  </div>
</div>