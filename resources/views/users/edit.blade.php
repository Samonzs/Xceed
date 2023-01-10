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
        <input type="text" name="staff_fname" id="staff_fname" value="{{$users->staff_fname}}" class="form-control"></br>
        <span style="color:red">@error('staff_fname'){{$message}}@enderror</span>
        
        <label for="lname">Last Name</label></br>
        <input type="text" name="staff_lname" id="staff_lname" value="{{$users->staff_lname}}" class="form-control"></br>
        <span style="color:red">@error('staff_lname'){{$message}}@enderror</span>

        <label for="email">Email</label></br>
        <input type="text" name="staff_email" id="staff_email" value="{{$users->staff_email}}" class="form-control"></br>
        <span style="color:red">@error('staff_email'){{$message}}@enderror</span>

        <label for="pass">Password</label></br>
        <input type="text" name="password" id="password" value="{{$users->password}}" class="form-control"></br>
        <span style="color:red">@error('password'){{$message}}@enderror</span>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop