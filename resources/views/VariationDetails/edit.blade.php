@extends('VariationDetails.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Variation</div>
  <div class="card-body">
      
  <form action="{{ url('lov/' .$VariationDetails->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$VariationDetails->id}}" id="id"/>
          <label for="firstName">First Name</label>
          <!-- <span style="color:red">@error('firstName'){{$message}}@enderror</span> -->
          <input type="text" name="firstName" id="firstName" value="{{$VariationDetails->firstName}}" class="form-control">
          

          <label for="lastName">Last Name</label>
          <input type="text" name="lastName" id="lastName" value="{{$VariationDetails->lastName}}" class="form-control">

          <label for="clientEmail">client Email</label>
          <input type="text" name="clientEmail" id="clientEmail" value="{{$VariationDetails->clientEmail}}" class="form-control">
          
          <label for="companyName">company Name</label>
          <input type="text" name="companyName" id="companyName" value="{{$VariationDetails->companyName}}" class="form-control">

          <label for="abn">abn</label>
          <input type="text" name="abn" id="abn" value="{{$VariationDetails->abn}}" class="form-control">

          <label for="addressLine">address Line</label>
          <input type="text" name="addressLine" id="addressLine" value="{{$VariationDetails->addressLine}}" class="form-control">

          <label for="suburb">suburb</label>
          <input type="text" name="suburb" id="suburb" value="{{$VariationDetails->suburb}}" class="form-control">

          <label for="postcode">postcode</label>
          <input type="text" name="postcode" id="postcode" value="{{$VariationDetails->postcode}}" class="form-control">

          <label for="jobReferenceNumber">job Reference Number</label>
          <input type="text" name="jobReferenceNumber" id="jobReferenceNumber" value="{{$VariationDetails->jobReferenceNumber}}" class="form-control">

          <label for="orderNumber">Order Number</label>
          <input type="text" name="orderNumber" id="orderNumber" value="{{$VariationDetails->orderNumber}}" class="form-control">

          <label for="siteName">Site Name</label>
          <input type="text" name="siteName" id="siteName" value="{{$VariationDetails->siteName}}" class="form-control">

          <label for="siteAddressLine">site Address Line</label>
          <input type="text" name="siteAddressLine" id="siteAddressLine" value="{{$VariationDetails->siteAddressLine}}" class="form-control">

          <label for="siteAddressState">site Address State</label>
          <input type="text" name="siteAddressState" id="siteAddressState" value="{{$VariationDetails->siteAddressState}}" class="form-control">

          <label for="sitePostcode">site Post code</label>
          <input type="text" name="sitePostcode" id="sitePostcode" value="{{$VariationDetails->sitePostcode}}" class="form-control">

          <label for="variationItem">variation Item</label>
          <input type="text" name="variationItem" id="variationItem" value="{{$VariationDetails->variationItem}}" class="form-control">

          <label for="variationItemPrice">variation Item Price</label>
          <input type="text" name="variationItemPrice" id="variationItemPrice" value="{{$VariationDetails->variationItemPrice}}" class="form-control">
          
          <label for="variationDescription">variation Description</label>
          <input type="text" name="variationDescription" id="variationDescription" value="{{$VariationDetails->variationDescription}}" class="form-control">
          <!-- change to text area, giving error where it doesn't display updated info. It does however store the value into database... -->
          <!-- <textarea type="text" name="variationDescription" id="variationDescription" value="{{$VariationDetails->variationDescription}}" class="form-control"></textarea> -->

          <label for="totalCost">Total Cost</label>
          <input type="text" name="totalCost" id="totalCost" value="{{$VariationDetails->totalCost}}" class="form-control">

          <label for="variationDateRequest">variation Date Request</label>
          <input type="text" name="variationDateRequest" id="variationDateRequest" value="{{$VariationDetails->variationDateRequest}}" class="form-control">

          <input type="submit" value="Update" class="btn btn-success"> <a href="<?php echo url('/lov')?>"><button class="btn btn-secondary btn-sm ">Back</button></a>
    </form>
  
  </div>
</div>
@stop