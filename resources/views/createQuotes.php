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
                     <a class="nav-link" href="<?php echo url('welcome')?>"><span class="glyphicon glyphicon-log-in"></span>Logout</a>
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

               @import url('https://fonts.googleapis.com/css2?family=Jost:wght@100;300;400;700&display=swap');
                  
               input[type=text] {
                  width: 15%;
                  padding: 6px 6px;
                  margin: 4px 0; 
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

                  #remove_fields, #add_more_fields{
                  margin: 10px;
                  font-weight: bold;
                  }
                 
                 

                  
               </style>
            </head>
            <form>
               <!-- customer dets -->
               <section>
                  <fieldset>
                        <label for="fname">First name:</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                        <label for="lname">Last name:</label><br>
                        <input type="text" id="lname" name="lname" value=""><br><br>
                        <label for="compName">Company Name:</label><br>
                        <input type="text" id="compName" name="compName" value=""><br><br>
                        <label for="date">Date:</label><br>
                        <input type="text" id="date" name="date" value=""><br><br>
                        <label for="pNumber">Phone Number:</label><br>
                        <input type="text" id="pNumber" name="pNumber" value=""><br><br>
                        <label for="abn">ABN:</label><br>
                        <input type="text" id="abn" name="abn" value=""><br><br>
                        <label for="address">Address line:</label><br>
                        <input type="text" id="address" name="address" value=""><br><br>
                        <label for="suburb">Suburb:</label><br>
                        <input type="text" id="suburb" name="suburb" value=""><br><br>
                        <label for="postcode">Post Code:</label><br>
                        <input type="text" id="postcode" name="postcode" value=""><br><br>
                        <label for="email">Email:</label><br>
                        <input type="text" id="email" name="email" value=""><br><br>
                     </fieldset>
               </section>
                  

               <!-- Variations dets -->
               <section>
                  <fieldset>
                        <label for="jrNumber">Job Reference Number</label><br>
                        <input type="number" id="jrNumber" name="jrNumber" value=""><br><br>
                        <label for="ordNumber">Order Number</label><br>
                        <input type="number" id="ordNumber" name="ordNumber" value=""><br><br>
                        <label for="siteName">Site Name:</label><br>
                        <input type="text" id="siteName" name="siteName" value=""><br>
                        <label for="siteAddress">Site Address:</label><br>
                        <input type="text" id="siteAddress" name="siteAddress" value=""><br><br>
                        <label for="quotedesc">Description of Quote:</label><br>
                        <textarea id="quotedesc" name="quotedesc" rows="10" cols="55"></textarea>
                        <br><br>
                     </fieldset>
               </section>
               
               
               
               
               <!-- Variations (item price inputs) -->

               <div class="wrapper">
                  <div id="survey_options">
                  <input type="text" name="survey_options[]" class="survey_options" size="50" placeholder="Item">
                  <input type="text" name="survey_options[]" class="survey_options" size="50" placeholder="Price">    
                          
               </div>
                  
                  <div class="controls">
                     <a type="button" id="add_more_fields"><i class="fa fa-plus"></i>+ Add More</a>
                     <a type="button" id="remove_fields"><i class="fa fa-plus"></i>- Remove Field</a>
                  </div>
               </div>


         <script> 
 

            var survey_options = document.getElementById('survey_options');
            var add_more_fields = document.getElementById('add_more_fields');
            var remove_fields = document.getElementById('remove_fields');
            
            add_more_fields.onclick = function(){

            var item = document.createElement('input');
            var price = document.createElement('input');

            item.setAttribute('type','text');
            item.setAttribute('name','survey_options[]');
            item.setAttribute('class','survey_options');
            item.setAttribute('siz',50);
            item.setAttribute('placeholder','Item');

            price.setAttribute('type','text');
            price.setAttribute('name','survey_options[]');
            price.setAttribute('class','survey_options');
            price.setAttribute('siz',50);
            price.setAttribute('placeholder','Price');

            survey_options.appendChild(item);
            survey_options.appendChild(price);
            
         
            }

            
            remove_fields.onclick = function(){
            var input_tags = survey_options.getElementsByTagName('input');
            if(input_tags.length > 2) {
               survey_options.removeChild(input_tags[(input_tags.length) - 1]);
               survey_options.removeChild(input_tags[(input_tags.length) - 1]);
            }
            }
 
         
         </script>

   <div>

            <label for="price">Total cost:</label><br>
            <input type="number" min="0.00" max="100000.00" id="price" name="price" step="0.01" value=""><br><br>


               <input type="submit" value="Submit">
            </div>
         </form>
      </center>
   </header>
</body>
</html>