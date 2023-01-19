@extends('users.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header"><h1>Show Details</h1></div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-title"><strong>First Name</strong>: {{ $users->staff_fname }}</p>
            <p class="card-title"><strong>Last Name</strong>: {{ $users->staff_lname }}</p>
            <p class="card-text"><strong>Email</strong>: {{ $users->staff_email }}</p>
            <p class="card-text"><strong>Password</strong>: {{ $users->password }}</p>
            <a href="<?php echo url('/staffListCrud')?>"><button class="btn btn-secondary btn-info btn-sm">Back</button></a>
        </div>
  </div>
</div>
