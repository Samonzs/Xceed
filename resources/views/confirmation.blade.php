
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
              <a class="navbar-brand" href="<?php echo url('listofquotes')?>"><img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" width="85" height="25" alt="XCEED ELectrical Logo"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    
                      <li class="nav-item active">
                        <a class="nav-link" href="<?php echo url('listofquotes')?>">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <a class="nav-link" href="<?php echo url('createquotes')?>">Create Variations</a>
                      </ul>
                      <ul class="navbar-nav ml-auto">

                      @if(isset(Auth::user()->staff_email))
                     <div class="nav-link">
                     <strong>Welcome {{ Auth::user()->staff_email }}</strong>
                     </div>
                     @if(Auth::user()->hasRole('admin')) 
                      <div class="dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Admin Panel
                     </a>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo url('staffListCrud')?>">Staff List</a>
                        <a class="dropdown-item" href="<?php echo url('createstaff')?>">Create Staff</a>
                        <a class="dropdown-item" href="<?php echo url('TaC')?>">Terms & Conditions</a>
                     </div>
                     @endif

                     <br/> 
                     </div>
                     @else
                     <script>window.location = "/user";</script>
                     @endif   
                     
                     
                        <a class="nav-link" href="{{ url('/user/logout') }}"><span class="glyphicon glyphicon-log-in"></span>Logout</a>
                      </ul>
                    </div>                     
                  </div>
                </nav>
</header> 
<body>
<center>
<img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" alt="Logo">
    <h3>Confirmation Details</h3>
    <table class="table table-striped table-responsive-sm table-hover text-center">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Client Email</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Send Email</th>
          <th scope="col">Show PDF</th>
        </tr>
      </thead>
      <tbody>
      @foreach($client_list_data as $key=>$item)
        <tr>
            <th scope="row">{{$item['id']}}</th>
            <td>{{$item['firstName']}}</td>
            <td>{{$item['lastName']}}</td>
            <td>{{$item['clientEmail']}}</td>
            <td>{{$item['phoneNumber']}}</td>
            <td><a href="{{url('client_show?id='.$item['id'])}}">Send Email</a></td>
            <td><a href="{{url('show_pdf?id='.$item['id'])}}">PDF File</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
    <!-- this nav bar will contain the green accent, a sign in page as well as a staff support link (we'll see if this is good or not) -->
<center>

    <script>
        @if((session()->has('msg')))
        alert("{{session()->get('msg')}}");
        @endif
    </script>
   </body>
   </html>