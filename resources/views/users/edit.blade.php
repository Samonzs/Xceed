@extends('users.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Staff Details</div>
  <div class="card-body">
      
      <form action="{{ url('staffListCrud/' .$users->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
        <label for="fname">First Name</label></br>
        <input type="text" name="fname" id="fname" value="{{$users->staff_fname}}" class="form-control"></br>
        <label for="lname">Last Name</label></br>
        <input type="text" name="lname" id="lname" value="{{$users->staff_lname}}" class="form-control"></br>
        <label for="email">Email</label></br>
        <input type="text" name="email" id="email" value="{{$users->staff_email}}" class="form-control"></br>
        <label for="pass">Password</label></br>
        <input type="text" name="pass" id="pass" value="{{$users->password}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop