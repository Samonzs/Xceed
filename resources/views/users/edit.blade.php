@extends('users.layout')
@section('content')
<div class="card">
  <div class="card-header"><h1>Edit Staff List</h1></div>
  <div class="card-body">
      
  <form action="{{ url('staffListCrud/' .$users->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
          <label for="fname"><strong>First Name</strong>:</label>
          <span style="color:red">@error('staff_fname'){{$message}}@enderror</span>
          <input type="text" name="staff_fname" id="staff_fname" value="{{$users->staff_fname}}" class="form-control">
          

          <label for="lname"><strong>Last Name</strong>:</label>
          <span style="color:red">@error('staff_lname'){{$message}}@enderror</span>
          <input type="text" name="staff_lname" id="staff_lname" value="{{$users->staff_lname}}" class="form-control">

          <label for="email"><strong>Email</strong>:</label>
          <span style="color:red">@error('staff_email'){{$message}}@enderror</span>
          <input type="text" name="staff_email" id="staff_email" value="{{$users->staff_email}}" class="form-control">

          <label for="pass"><strong>Password</strong>:</label>
          <span style="color:red">@error('password'){{$message}}@enderror</span>
          <input type="text" name="password" id="password" value="{{$users->password}}" class="form-control"><br>
          <input type="submit" value="Update" class="btn btn-success"> <a href="<?php echo url('/staffListCrud')?>"><button class="btn btn-secondary btn-sm ">Back</button></a>
    </form>
  
  </div>
</div>
@stop