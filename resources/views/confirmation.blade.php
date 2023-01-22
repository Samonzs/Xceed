<!doctype html>
<html lang="en">
<head> 
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>XCEED Confirmation</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
      <style> 

@import url('https://fonts.googleapis.com/css2?family=Jost:wght@100;300;400;700&display=swap');
   

  .kbw-signature { width: 100%; height: 200px;}
        #sig canvas{ width: 100% !important; height: auto;}



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
                      <li class="nav-item active">
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
<body>
<center>
<img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" alt="Logo">
    <h3>Confirmation Details</h3>
<br><br>


<div class="container">
      <!-- <div class="row"> -->
        
<div class="col-md-10">
      <div class="card">
        <div class="card-body" >
<br/>
    <div class="table-responsive">
      <table class="table">
    @foreach($client_list_data as $item)

      <h4 > Client Details</h4>
      <tbody>
        <tr>
          <!-- <th scope="col">ID</th> -->
          <!-- <td scope="row">{{$item['id']}}</th> -->

          <th scope="col">First Name</th>
          <td>{{$item['firstName']}}</td>
        </tr>
        <tr>
          <th scope="col">Last Name</th>
          <td>{{$item['lastName']}}</td>   
        </tr>
        <tr>
          <th scope="col">Client Email</th>
          <td>{{$item['clientEmail']}}</td>
        </tr>
        <tr>
          <th scope="col">Phone Number</th>
          <td>{{$item['phoneNumber']}}</td>
        </tr>
        <tr>
          <th scope="col">Date</th>
          <td>{{$item['date']}}</td>
        </tr>
        <tr>
          <th scope="col">Company Name</th>
          <td>{{$item['companyName']}}</td>
        </tr>
        <tr>
          <th scope="col">ABN</th>
          <td>{{$item['abn']}}</td>
        </tr>
        <tr>
          <th scope="col">Address</th>
          <td>{{$item['addressLine']}}</td>
        </tr>
        <tr>
          <th scope="col">Suburb</th>
          <td>{{$item['suburb']}}</td>
        </tr>
        <tr>
          <th scope="col">Postcode</th>
          <td>{{$item['postcode']}}</td>
        </tr>
    </tbody>
    </table>
    <br><br>

    <div class="table-responsive">
       <table class="table">
    <!-- <table class="table table-striped table-responsive-sm table-hover text-left"> -->
    <h4 > Client Site Details</h4>
    <tbody>
        <tr>
          <th scope="col">Job Reference Number</th>
          <td>{{$item['jobReferenceNumber']}}</td>
        </tr>
        <tr>
          <th scope="col">Order Number</th>
          <td>{{$item['orderNumber']}}</td>
        </tr>
        <tr>
          <th scope="col">Site Name</th>
          <td>{{$item['siteName']}}</td>
        </tr>
        <tr>
          <th scope="col">Site Address Line</th>
          <td>{{$item['siteAddressLine']}}</td>
        </tr>
        <tr>
          <th scope="col">Site Address State</th>
          <td>{{$item['siteAddressState']}}</td>
        </tr>
        <tr>
          <th scope="col">Site Postcode</th>
          <td>{{$item['sitePostcode']}}</td>
        </tr>
        <tr>
          <th scope="col">Variation Item</th>
          <td>{{$item['variationItem']}}</td>
        </tr>
        <tr>
          <th scope="col">Variation Item Price</th>
          <td>{{$item['variationItemPrice']}}</td>
        </tr>
        <tr>
          <th scope="col">Variation Description</th>
          <td>{{$item['variationDescription']}}</td>
        </tr>
        <tr>
          <th scope="col">Total Cost</th>
          <td>{{$item['totalCost']}}</td>
        </tr>
        <tr>
          <th scope="col">Variation Date Request</th>
          <td>{{$item['variationDateRequest']}}</td>
        </tr>
        <!-- <tr>
          <th scope="col">Created At</th>
          <td>{{$item['created_at']}}</td>
        </tr>
        <tr>
          <th scope="col">Updated At</th>
          <td>{{$item['updated_at']}}</td>
        </tr> -->
    </tbody>
    </table>  
    <br><br>

    <!-- <table class="table table-striped table-responsive-sm table-hover text-left"> -->
    <tbody>
    @endforeach


    <h4 > Terms And Conditions</h4>
    <td>{{$terms_and_conditions['TermsAndConditions']}}</td>
    </tbody>
    </table>

    <div class="container">
   <div class="row">
       <div class="col-md-6 offset-md-3 mt-5">
           <div class="card">
               <div class="card-body">
                    <form method="POST" action="signature">
                        @csrf
                        <div class="col-md-12">
                            <label class="" for=""><strong>Draw Signature:</strong></label>
                            <br/>
                            <div id="sig"></div>
                            <br><br>
                            <button id="clear" class="btn btn-danger">Clear Signature</button>
                            <button class="btn btn-success">Save</button>
                            <input id="signature" name="signed" style="display: none" value="{{ old('signed') }}"></input>
                        </div>
                    </form>

               </div>
           </div>
       </div>
   </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature").val('');
    });
</script>


    <div>
        <br><br>
            <a href="{{url('show_pdf?id='.$item['id'])}}"> <button class="btn btn-info">Show as PDF</button></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{url('client_show?id='.$item['id'])}}"><button class="btn btn-info">Send Email</button></a>
    </div>
    
    <!-- this nav bar will contain the green accent, a sign in page as well as a staff support link (we'll see if this is good or not) -->
<center>

    <script>
        @if((session()->has('msg')))
        alert("{{session()->get('msg')}}");
        @endif
    </script>
   </body>
   </html>
