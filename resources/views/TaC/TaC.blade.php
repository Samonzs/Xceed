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
   
fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
    box-shadow:  0px 0px 0px 0px #000;
}

legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
    width:inherit; /* Or auto */
    padding:0 10px; /* To give a bit of padding on the left and right */
    border-bottom:none;
}
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

   #remove_fields, #add_more_fields{
   margin: 10px;
   font-weight: bold;
   }
  
  

   
</style>
   
   </head>
   <!-- DASHBOARD  -->
<header>
         <nav class="navbar navbar-light bg-light navbar-expand-lg">
            <a class="navbar-brand" href="<?php echo url('listofquotes')?>"><img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" width="85" height="25" alt="XCEED ELectrical Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo url('listofquotes')?>">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo url('createquotes')?>">Create Variation <span class="sr-only">(current)</span></a>
                  </li>
               </ul>
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo url('createstaff')?>"><span class="glyphicon glyphicon-user"></span> Create Staff</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('listofstaff')?>"><span class="glyphicon glyphicon-user"></span> Staff List</a>
                        </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?php echo url('welcome')?>"><span class="glyphicon glyphicon-log-in"></span>Logout</a>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
   <body>
      <center>
@extends('TaC.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    $TaC->Terms and Conditions
                                        <th>Terms & Conditions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                $course = Course::where('Terms and Conditions', $TaC)->first();

                                @foreach($TaC as $item)
                                    <tr>
                                        <td>{{ $item->Terms and Conditions}}</td>   
                                        <td>
                                            <a href="{{ url('/TaC.TaCedit/' . $item->id . '/TaCedit') }}" title="Edit Terms and Conditions"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                         </td>                                                
                                    </tr>
                                @endforeach
                                </tbody>
                                    
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
      </center>
   </header>
</body>
</html>