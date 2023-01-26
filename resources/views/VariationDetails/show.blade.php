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
@endif
