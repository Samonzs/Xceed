@extends('TaC.layout')
@section('content')
<div class="card">
  <div class="card-header"></div>
  <div class="card-body">
  <center>
        <h4>Terms and Conditions : </h4>
        <div class="card-body">
        <h5 class="card-title">{{ $TaC->TermsAndConditions }}</h5>
        <br><a href="{{ url('TaC')}}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i> Back</button></a>

  </center> 
  </div>
      
    </hr>
  
  </div>
</div>
