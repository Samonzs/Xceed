<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>XCEED Create Quote</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/stylesheet.css">
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    </head>
    <body>
        <img src="images/logo.jpg" class="img-fluid" alt="Logo">
        <header>
            <h1>XCEED ELECTRICAL</h1>
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

</header>
                
    </body>
</html>