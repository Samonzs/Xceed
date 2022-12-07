<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>XCEED Create Quote</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <header>
    <nav class="navbar navbar-inverse">

    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>

        <!-- logo image located here -->
        <a class="navbar-brand" href="<?php echo url('welcome')?>"><img src="images/logo.jpg" class="img-fluid" alt="XCEED ELectrical Logo"></a>
        
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quoting <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo url('createquotes')?>">Create a Quote</a></li>
            <li><a href="<?php echo url('listofquotes')?>">List of Quotes</a></li>
        </ul>
        <!-- <li><a href="#">section 2</a></li>
        <li><a href="#">Section 3</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <!-- The glyphicon is just a symbol to use that can be called through the css and js components of bootstrap -->
        <li><a href="<?php echo url('createstaff')?>"><span class="glyphicon glyphicon-user"></span> Create Staff</a></li>
        <li><a href="<?php echo url('login')?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    </div>
    </div>
    </nav>
    </header>

    <body>
    <center>
        <img src="images/logo.jpg" class="img-fluid" alt="Logo">
        <header>
        

            <h3>Create Quote</h3>
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
  <label for="Address">Address:</label><br>
  <input type="text" id="Address" name="Address" value=""><br><br>
    <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value=""><br><br>
  <label for="quotedesc">Description of Quote:</label><br>
  <textarea id="quotedesc" name="quotedesc" rows="10" cols="55">
	</textarea><br><br>
  <label for="price">Total cost:</label><br>
  <input type="number" min="0.00" max="100000.00" id="price" name="price" step="0.01" value=""><br><br>
   <div class="row">
    <input type="submit" value="Submit">
  </div>
</form>  
</center>
</header>
                
    </body>
</html>