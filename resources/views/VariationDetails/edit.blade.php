@extends('VariationDetails.layout')
@section('content')

@if(Auth::user()->hasRole('user')) 
<span style="color:black">Error: Unauthorised Access</span>

@elseif(Auth::user()->hasRole('admin'))

<header>
            <nav class="navbar navbar-light bg-light navbar-expand-lg">
              <a class="navbar-brand" href="<?php echo url('lov')?>"><img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" width="85" height="25" alt="XCEED ELectrical Logo"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('lov')?>">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <a class="nav-link" href="<?php echo url('createquotes')?>">Create Variations</a>
                      </ul>
                     

                     <ul class="navbar-nav ml-auto">
                     @if(isset(Auth::user()->staff_email))
                      <strong class="nav-link">Welcome {{ Auth::user()->staff_fname }}</strong>
                     @else
                     <script>window.location = "/user";</script>
                     @endif
               
                     <div class="dropdown">
                     @if(Auth::user()->hasRole('admin')) 

                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Admin Panel
                        </a>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo url('staffListCrud')?>">Staff List</a>
                        <a class="dropdown-item" href="<?php echo url('createstaff')?>">Create Staff</a>
                        <a class="dropdown-item" href="<?php echo url('TaC')?>">Terms & Conditions</a>
                     </div> 
                     @endif
                     
                     </div>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/user/logout') }}"><span class="glyphicon glyphicon-log-in"></span>Logout</a>
                        </li>
                      </ul>
                    </div>
                </nav>
</header>

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
            <!-- change to text area, giving error where it doesn't display updated info. It does however store the value into database...  -- now fixed!!! -- -->
            <textarea type="text" name="variationDescription" id="variationDescription" rows="10" class="form-control">{{$VariationDetails->variationDescription}}</textarea>

            <label for="totalCost"> <strong>Total Cost ($)</strong></label>
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
@endif