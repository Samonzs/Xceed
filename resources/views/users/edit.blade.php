@extends('users.layout')
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
          <input type="text" name="password" id="password" placeholder= "New Password" value="" class="form-control" ><br>
          <a href="<?php echo url('/staffListCrud')?>"><button class="btn btn-secondary">Back</button></a> <input type="submit" value="Update" class="btn btn-success"> 
    </form>

</div>
</div>
@stop
@endif