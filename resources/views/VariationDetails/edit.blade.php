@extends('VariationDetails.layout')
@section('content')
<div class="card">
  <div class="card-header"><h1>Edit Variation</h1></div>
  <div class="card-body">
      
  <form action="{{ url('lov/' .$VariationDetails->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$VariationDetails->id}}" id="id"/>
          <label for="firstName"><strong>First Name</strong></label>
          <span style="color:red">@error('firstName'){{$message}}@enderror</span>
          <input type="text" name="firstName" id="firstName" value="{{$VariationDetails->firstName}}" class="form-control">
          

          <label for="lastName"><strong>Last Name</strong></label>
          <span style="color:red">@error('lastName'){{$message}}@enderror</span>
          <input type="text" name="lastName" id="lastName" value="{{$VariationDetails->lastName}}" class="form-control">

          <label for="clientEmail"><strong>Client Email</strong></label>
          <span style="color:red">@error('clientEmail'){{$message}}@enderror</span>
          <input type="text" name="clientEmail" id="clientEmail" value="{{$VariationDetails->clientEmail}}" class="form-control">
          
          <label for="companyName"><strong>Company Name</strong></label>
          <span style="color:red">@error('companyName'){{$message}}@enderror</span>
          <input type="text" name="companyName" id="companyName" value="{{$VariationDetails->companyName}}" class="form-control">

          <label for="abn"><strong>ABN</strong></label>
          <span style="color:red">@error('abn'){{$message}}@enderror</span>
          <input type="text" name="abn" id="abn" value="{{$VariationDetails->abn}}" class="form-control">

          <label for="addressLine"><strong>Address Line</strong></label>
          <span style="color:red">@error('addressLine'){{$message}}@enderror</span>
          <input type="text" name="addressLine" id="addressLine" value="{{$VariationDetails->addressLine}}" class="form-control">

          <label for="suburb"><strong>Suburb</strong></label>
          <span style="color:red">@error('suburb'){{$message}}@enderror</span>
          <input type="text" name="suburb" id="suburb" value="{{$VariationDetails->suburb}}" class="form-control">

          <label for="postcode"><strong>Postcode</strong></label>
          <span style="color:red">@error('postcode'){{$message}}@enderror</span>
          <input type="text" name="postcode" id="postcode" value="{{$VariationDetails->postcode}}" class="form-control">

          <label for="jobReferenceNumber"><strong>Job Reference Number</strong></label>
          <span style="color:red">@error('jobReferenceNumber'){{$message}}@enderror</span>
          <input type="text" name="jobReferenceNumber" id="jobReferenceNumber" value="{{$VariationDetails->jobReferenceNumber}}" class="form-control">

          <label for="orderNumber"><strong>Order Number</strong></label>
          <span style="color:red">@error('orderNumber'){{$message}}@enderror</span>
          <input type="text" name="orderNumber" id="orderNumber" value="{{$VariationDetails->orderNumber}}" class="form-control">

          <label for="siteName"><strong>Site Name</strong></label>
          <span style="color:red">@error('siteName'){{$message}}@enderror</span>
          <input type="text" name="siteName" id="siteName" value="{{$VariationDetails->siteName}}" class="form-control">

          <label for="siteAddressLine"><strong>Site Address Line</strong></label>
          <span style="color:red">@error('siteAddressLine'){{$message}}@enderror</span>
          <input type="text" name="siteAddressLine" id="siteAddressLine" value="{{$VariationDetails->siteAddressLine}}" class="form-control">

          <label for="siteAddressState"><strong>Site Address State</strong></label>
          <span style="color:red">@error('siteAddressState'){{$message}}@enderror</span>
          <input type="text" name="siteAddressState" id="siteAddressState" value="{{$VariationDetails->siteAddressState}}" class="form-control">

          <label for="sitePostcode"><strong>Site Postcode</strong></label>
          <span style="color:red">@error('sitePostcode'){{$message}}@enderror</span>
          <input type="text" name="sitePostcode" id="sitePostcode" value="{{$VariationDetails->sitePostcode}}" class="form-control">
          
          <label for="variationDescription"><strong>Vriation Description</strong></label>
          <!-- <input type="text" name="variationDescription" id="variationDescription" value="{{$VariationDetails->variationDescription}}" class="form-control"> -->
          <!-- change to text area, giving error where it doesn't display updated info. It does however store the value into database... -->
          <textarea type="text" name="variationDescription" id="variationDescription" rows="10" value="{{$VariationDetails->variationDescription}}" class="form-control"></textarea>

          <label for="totalCost"> <strong>Total Cost</strong></label> <strong></strong>
          <span style="color:red">@error('totalCost'){{$message}}@enderror</span>
          <input type="text" name="totalCost" id="totalCost" value="{{$VariationDetails->totalCost}}" class="form-control">

          <label for="variationDateRequest"><strong>Variation Date Request</strong></label>
          <!-- <span style="color:red">@error('variationDateRequest'){{$message}}@enderror</span> -->
          <input type="text" name="variationDateRequest" id="variationDateRequest" value="{{$VariationDetails->variationDateRequest}}" class="form-control"> <br>

          <a href="<?php echo url('/lov')?>"><button class="btn btn-secondary">Back</button></a> <input type="submit" value="Update" class="btn btn-success">
    </form>
  
  </div>
</div>
@stop