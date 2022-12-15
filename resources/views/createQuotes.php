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
                  <li class="nav-item active">
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
                     <a class="nav-link" href="<?php echo url('welcome')?>"><span class="glyphicon glyphicon-log-in"></span>Login</a>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
   <body>
      <center>
         <img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" alt="Logo">
         <header>
            <h3>Create Variation</h3>
            <!-- this nav bar will contain the green accent, a sign in page as well as a staff support link (we'll see if this is good or not) -->
            <head>
               <style> 
                  input[type=text] {
                  width: 15%;
                  padding: 6px 6px;
                  margin: 4px 0; 
                  }
               </style>
            </head>
            <form>
               <label for="fname">First name:</label><br>
               <input type="text" id="fname" name="fname" value=""><br><br>
               <label for="lname">Last name:</label><br>
               <input type="text" id="lname" name="lname" value=""><br><br>
               <label for="pNumber">Phone Number:</label><br>
               <input type="text" id="pNumber" name="pNumber" value=""><br><br>
               <label for="Address">Address line:</label><br>
               <input type="text" id="Address" name="Address" value=""><br><br>
               <label for="suburb">Suburb:</label><br>
               <input type="text" id="suburb" name="suburb" value=""><br><br>
               <label for="postcode">Post Code:</label><br>
               <input type="text" id="postcode" name="postcode" value=""><br><br>
               <label for="email">Email:</label><br>
               <input type="text" id="email" name="email" value=""><br><br>
               <label for="email">Job Reference Number</label><br>
               <input type="number" id="jrNumber" name="jrNumber" value=""><br><br>
               <label for="quotedesc">Description of Quote:</label><br>
               <textarea id="quotedesc" name="quotedesc" rows="10" cols="55"></textarea>
               <br><br>
               <label for="price">Total cost:</label><br>
               <input type="number" min="0.00" max="100000.00" id="price" name="price" step="0.01" value=""><br><br>
               <div>
                  <input type="submit" value="Submit">
               </div>
            </form>
      </center>
      </header>
   </body>
</html>