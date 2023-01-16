@extends('VariationDetails.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Variation</div>
  <div class="card-body">
      
  <form action="{{ url('staffListCrud/' .$VariationDetails->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$VariationDetails->id}}" id="id" />
          <label for="firstName">First Name</label></br>
          <span style="color:red">@error('firstName'){{$message}}@enderror</span>
          <input type="text" name="firstName" id="firstName" value="{{$VariationDetails->firstName}}" class="form-control"></br>
          

          <label for="lastName">Last Name</label></br>
          <input type="text" name="lastName" id="lastName" value="{{$VariationDetails->lastName}}" class="form-control"></br>

          <label for="clientEmail">client Email</label></br>
          <input type="text" name="clientEmail" id="clientEmail" value="{{$VariationDetails->clientEmail}}" class="form-control"></br>
          
          <label for="companyName">company Name</label></br>
          <input type="text" name="companyName" id="companyName" value="{{$VariationDetails->companyName}}" class="form-control"></br>

          <label for="abn">abn</label></br>
          <input type="text" name="abn" id="abn" value="{{$VariationDetails->abn}}" class="form-control"></br>

          <label for="addressLine">address Line</label></br>
          <input type="text" name="addressLine" id="addressLine" value="{{$VariationDetails->addressLine}}" class="form-control"></br>

          <label for="suburb">suburb</label></br>
          <input type="text" name="suburb" id="suburb" value="{{$VariationDetails->suburb}}" class="form-control"></br>

          <label for="postcode">postcode</label></br>
          <input type="text" name="postcode" id="postcode" value="{{$VariationDetails->postcode}}" class="form-control"></br>

          <label for="jobReferenceNumber">job Reference Number</label></br>
          <input type="text" name="jobReferenceNumber" id="jobReferenceNumber" value="{{$VariationDetails->jobReferenceNumber}}" class="form-control"></br>

          <label for="orderNumber">Order Number</label></br>
          <input type="text" name="orderNumber" id="orderNumber" value="{{$VariationDetails->orderNumber}}" class="form-control"></br>

          <label for="siteName">Site Name</label></br>
          <input type="text" name="siteName" id="siteName" value="{{$VariationDetails->siteName}}" class="form-control"></br>

          <label for="siteAddressLine">site Address Line</label></br>
          <input type="text" name="siteAddressLine" id="siteAddressLine" value="{{$VariationDetails->siteAddressLine}}" class="form-control"></br>

          <label for="siteAddressState">site Address State</label></br>
          <input type="text" name="siteAddressState" id="siteAddressState" value="{{$VariationDetails->siteAddressState}}" class="form-control"></br>

          <label for="sitePostcode">site Post code</label></br>
          <input type="text" name="sitePostcode" id="sitePostcode" value="{{$VariationDetails->sitePostcode}}" class="form-control"></br>

          <label for="variationItem">variation Item</label></br>
          <input type="text" name="variationItem" id="variationItem" value="{{$VariationDetails->variationItem}}" class="form-control"></br>

          <label for="variationItemPrice">variation Item Price</label></br>
          <input type="text" name="variationItemPrice" id="variationItemPrice" value="{{$VariationDetails->variationItemPrice}}" class="form-control"></br>
          
          <label for="variationDescription">variation Description</label></br>
          <input type="text" name="variationDescription" id="phovariationDescriptionneNumber" value="{{$VariationDetails->variationDescription}}" class="form-control"></br>

          <label for="totalCost"></label></br>
          <input type="text" name="totalCost" id="totalCost" value="{{$VariationDetails->totalCost}}" class="form-control"></br>

          <label for="variationDateRequest">variation Date Request</label></br>
          <input type="text" name="variationDateRequest" id="variationDateRequest" value="{{$VariationDetails->variationDateRequest}}" class="form-control"></br>

          <input type="submit" value="Update" class="btn btn-success"> <a href="<?php echo url('/lov')?>"><button class="btn btn-secondary btn-sm ">Back</button></a>
    </form>
  
  </div>
</div>
@stop