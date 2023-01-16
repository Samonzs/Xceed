@extends('users.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Show Details</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">First Name : {{ $users->staff_fname }}</h5>
            <h5 class="card-title">Last Name : {{ $users->staff_lname }}</h5>
            <p class="card-text">Email : {{ $users->staff_email }}</p>
            <p class="card-text">Password : {{ $users->password }}</p>
            <a href="<?php echo url('/staffListCrud')?>"><button class="btn btn-secondary btn-info btn-sm">Back</button></a>
        </div>
  </div>
</div>
