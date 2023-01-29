<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>XCEED Create Quote</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
      <style> 

@import url('https://fonts.googleapis.com/css2?family=Jost:wght@100;300;400;700&display=swap');
   

   .wrapper {
   width: 400px;
   margin: 40px auto;
   padding: 10px;
   border-radius: 5px;
   background: white;
   box-shadow: 0px 10px 40px 0px rgba(47,47,47,.1);
   }

   input[type="text"]{
   padding: 10px;
   margin: 10px auto;
   display: block;
   border-radius: 5px;
   border: 1px solid lightgrey;
   background: none;
   width: 274px;
   color: black;
   }

   input[type="number"]{
   padding: 10px;
   margin: 10px auto;
   display: block;
   border-radius: 5px;
   border: 1px solid lightgrey;
   background: none;
   width: 274px;
   color: black;
   }

   input[type="date"]{
   padding: 10px;
   margin: 10px auto;
   display: block;
   border-radius: 5px;
   border: 1px solid lightgrey;
   background: none;
   width: 274px;
   color: black;
   }

   #remove_fields, #add_more_fields{
   margin: 10px;
   font-weight: bold;
   }

   .fieldsetc{
      border: 1px solid black;
      }
   
</style>
   
   </head>
   <!-- DASHBOARD  -->
   <header>
            <nav class="navbar navbar-light bg-light navbar-expand-lg">
              <a class="navbar-brand" href="<?php echo url('lov')?>"><img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" width="85" height="25" alt="XCEED ELectrical Logo"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <a class="nav-link" href="<?php echo url('lov')?>">Home <span class="sr-only">(current)</span></a>
                      
                      <li class="nav-item active">
                        <a class="nav-link" href="<?php echo url('createquotes')?>">Create Variations</a>
                      </li>
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
   <body>
      <center>
         <img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" alt="Logo">
      
            <h3>Create Variation</h3>
            <!-- this nav bar will contain the green accent, a sign in page as well as a staff support link (we'll see if this is good or not) -->
            <form action= "clientDetails" >
               <!-- customer dets -->
            
               <div class="accordion" id="accordionExample">
                  <div class="card">
                     <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Client Details
                        </button>
                        </h2>
                     </div>

                     <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                           <section>

                           
                           <label for="firstname">First name:</label> <br>
                              <span style="color:red">@error('firstname'){{$message}}@enderror</span>
                              <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}">

                              <label for="lname">Last name:</label><br>
                              <span style="color:red">@error('lastname'){{$message}}@enderror</span>
                              <input type="text" id="lname" name="lastname" value="{{ old('lastname') }}">

                              <label for="clientemail">Email:</label><br>
                              <span style="color:red">@error('clientemail'){{$message}}@enderror</span>
                              <input type="text" id="clientemail" name="clientemail" value="{{ old('clientemail') }}">

                              <label for="pNumber">Phone Number:</label><br>
                              <span style="color:red">@error('phonenumber'){{$message}}@enderror</span>
                              <input type="text" id="pNumber" name="phonenumber" value="{{ old('phonenumber') }}">

                              <label for="date">Date:</label><br>
                              <span style="color:red">@error('date'){{$message}}@enderror</span>
                              <input type="text" id="date" name="date" value="{{ old('date') }}" placeholder = "yyyy-mm-dd">

                              <label for="companyName">Company Name:</label><br>
                              <span style="color:red">@error('companyName'){{$message}}@enderror</span>
                              <input type="text" id="companyName" name="companyName" value="{{ old('companyName') }}">

                              <label for="abn">ABN:</label><br>
                              <span style="color:red">@error('abn'){{$message}}@enderror</span>
                              <input type="text" id="abn" name="abn" value="{{ old('abn') }}">

                              <label for="addressline">Address line:</label><br>
                              <span style="color:red">@error('addressline'){{$message}}@enderror</span>
                              <input type="text" id="addressline" name="addressline" value="{{ old('addressline') }}">

                              <label for="suburb">Suburb:</label><br>
                              <span style="color:red">@error('suburb'){{$message}}@enderror</span>
                              <input type="text" id="suburb" name="suburb" value="{{ old('suburb') }}">

                              <label for="postcode">Post Code:</label><br>
                              <span style="color:red">@error('postcode'){{$message}}@enderror</span>
                              <input type="text" id="postcode" name="postcode" value="{{ old('postcode') }}">

                              
                           </section>
                        </div>
                     </div>
               </div>

               <!-- Variations dets -->
               <div class="card">
                  <div class="card-header" id="headingTwo">
                     <h2 class="mb-0">
                     <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Client Site
                     </button>
                     </h2>
                  </div>
                     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        <section>
                        <label for="jrNumber">Job Reference Number</label><br>
                              <span style="color:red">@error('jobreferencenumber'){{$message}}@enderror</span>
                              <input type="number" id="jrNumber" name="jobreferencenumber" value="{{ old('jobreferencenumber') }}">

                              <label for="ordernumber">Order Number</label><br>
                              <span style="color:red">@error('ordernumber'){{$message}}@enderror</span>
                              <input type="number" id="ordernumber" name="ordernumber" value="{{ old('ordernumber') }}">

                              <label for="siteName">Site Name:</label><br>
                              <span style="color:red">@error('sitename'){{$message}}@enderror</span>
                              <input type="text" id="siteName" name="sitename" value="{{ old('sitename') }}"><br>

                              <label for="siteAddress">Site Address Line:</label><br>
                              <span style="color:red">@error('siteaddressline'){{$message}}@enderror</span>
                              <input type="text" id="siteAddress" name="siteaddressline" value="{{ old('siteaddressline') }}">

                              <label for="siteAddress">Site State:</label><br>
                              <span style="color:red">@error('siteaddressstate'){{$message}}@enderror</span>
                              <input type="text" id="siteAddress" name="siteaddressstate" value="{{ old('siteaddressstate') }}">

                              <label for="siteAddress">Site Postcode:</label><br>
                              <span style="color:red">@error('sitepostcode'){{$message}}@enderror</span>
                              <input type="text" id="siteAddress" name="sitepostcode" value="{{ old('sitepostcode') }}">
                           </section>      
                        </div>
                     </div>
                </div>

                           
               
               <!-- Variations (item price inputs) -->

               <div class="card">
                  <div class="card-header" id="headingThree">
                     <h2 class="mb-0">
                     <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Variations
                     </button>
                     </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                     <div class="card-body">


                     <label for="variationDescription">Description of Variation:</label><br>
                     <textarea id="variationDescription" name="variationDescription" rows="10" class="form-control" >{!! nl2br(old('variationDescription')) !!}</textarea>                                            
                     </div>

                        <div>
                           <label for="totalCost">Total cost:</label><br>
                           <span style="color:red">@error('totalCost'){{$message}}@enderror</span>  
                           <br>
                           <input type="number" min="0.00" max="10000000.00" id="totalCost" name="totalCost" step="0.01" value="{{ old('totalCost') }}">
                        </div>
                              <label for="variationDateRequest">Variation Date Request:</label><br>
                              <span style="color:red">@error('variationDateRequest'){{$message}}@enderror</span>
                              <input type="text" id="variationDateRequest" name="variationDateRequest" value="{{ old('variationDateRequest') }}" placeholder = "yyyy-mm-dd">
                        

                     </div>

                     <input type="hidden" id="createdBy" name="createdBy" value="{{Auth::user()->staff_fname}}" readonly>
                  
                  </div>
               </div>
                  <br>



                  <button type="submit" name="submit" class="btn btn-primary addPost">Submit</button>
     
               <div class="card">

 
         </form >
      </center>
</body>
</html>