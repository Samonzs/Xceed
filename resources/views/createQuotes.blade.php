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
              <a class="navbar-brand" href="<?php echo url('listofquotes')?>"><img src="https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png" class="img-fluid" width="85" height="25" alt="XCEED ELectrical Logo"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo url('listofquotes')?>">Home <span class="sr-only">(current)</span></a>
                      </li>

                      <li class="nav-item active">
                        <a class="nav-link" href="<?php echo url('createquotes')?>">Create Variations</a>
                      </ul>
                      <ul class="navbar-nav ml-auto">
                      <div class="dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Admin Panel
                        </a>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo url('listofstaff')?>">Staff List</a>
                        <a class="dropdown-item" href="<?php echo url('createstaff')?>">Create Staff</a>
                        <a class="dropdown-item" href="<?php echo url('TaC')?>">Terms & Conditions</a>
                     </div>
                     </div>
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

                           
                              <label for="fname">First name:</label>
                              <span style="color:red">@error('first name'){{$message}}@enderror</span>
                              <input type="text" id="fname" name="first name" value="">

                              <label for="lname">Last name:</label>
                              <input type="text" id="lname" name="last name" value="">
                              <span style="color:red">@error('last name'){{$message}}@enderror</span>

                              <label for="email">Email:</label>
                              <input type="text" id="email" name="client email" value="">

                              <label for="pNumber">Phone Number:</label>
                              <input type="text" id="pNumber" name="phone number" value="">

                              <label for="date">Date:</label>
                              <input type="date" id="date" name="date" value="">

                              <label for="compName">Company Name:</label>
                              <input type="text" id="compName" name="compName" value="">

                              <label for="abn">ABN:</label>
                              <input type="text" id="abn" name="abn" value="">

                              <label for="address">Address line:</label>
                              <input type="text" id="address" name="address line" value="">

                              <label for="suburb">Suburb:</label>
                              <input type="text" id="suburb" name="suburb" value="">

                              <label for="postcode">Post Code:</label>
                              <input type="text" id="postcode" name="postcode" value="">

                              
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
                              <label for="jrNumber">Job Reference Number</label>
                              <input type="number" id="jrNumber" name="job reference number" value="">

                              <label for="ordNumber">Order Number</label><br>
                              <input type="number" id="ordNumber" name="oder number" value="">

                              <label for="siteName">Site Name:</label><br>
                              <input type="text" id="siteName" name="site name" value=""><br>

                              <label for="siteAddress">Site Address Line:</label><br>
                              <input type="text" id="siteAddress" name="site address line" value="">

                              <label for="siteAddress">Site State:</label><br>
                              <input type="text" id="siteAddress" name="site address state" value="">

                              <label for="siteAddress">Site Postcode:</label><br>
                              <input type="text" id="siteAddress" name="site postcode" value="">
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
                        <!-- This is where the code goes -->
                           <label for="quotedesc">Description of Variation:</label><br>
                                 <textarea id="quotedesc" name="quotedesc" rows="3" cols="20"></textarea>
                           <div class="container-sm">
                           <div id="survey_options">
                           <input type="text" name="variation item" class="survey_options" size="50" placeholder="Variation Item">
                           <input type="text" name="variation item price" class="survey_options" size="50" placeholder="Variation Price">    
                                 
                           </div>
                  
                        <div class="controls">
                           <a type="button" id="add_more_fields"><i class="fa fa-plus"></i>+ Add More</a>
                           <a type="button" id="remove_fields"><i class="fa fa-plus"></i>- Remove Field</a>
                        </div>
                     </div>
                     <label for="quotedesc">Description of Variation:</label><br>
                                 <textarea id="variation description" name="variation description" rows="3" cols="13"></textarea>
                        <div>
                           <label for="price">Total cost:</label><br>
                           <input type="number" min="0.00" max="10000000.00" id="price" name="price" step="0.01" value="" readonly>
                        </div>

                        <label for="date">Variation Date Request:</label>
                              <input type="date" id="date" name="variation date request" value="">
                        



                     </div>
                  </div>
               </div>
                  <br>
                  <button type="submit" name="submit" class="btn btn-primary addPost">Submit</button>
     
               <div class="card">

               <!-- 
                  
               (Send Email) 
               
               <div class="card">
                  <div class="card-header" id="headingFour">
                     <h2 class="mb-0">
                     <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Send Email
                     </button>
                     </h2>
                  </div>

                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                     <div class="card-body">
                  <div class="form-box">
                     <form class="" enctype="multipart/form-data">
                        <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" value="">
                        <label>Title:</label>
                        <input type="text"  class="form-control" name="title"  >
                        </div>
                  <div class="form-group">
                     <label>Content</label>
                     <textarea name="content" class="form-control" rows="3" cols="13"></textarea>
                  </div>
                     </form>
                  </div>

                  <div class="submit-box">
                  <button type="button" class="btn btn-primary addPost">Send</button>
                  <button type="button" onclick="window.history.back()" class="btn btn-outline-secondary">Cancel</button>
                  
               </div>
               </div>

               -->
              

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


            $('.addPost').click(function () {
        $('.content').val(getPlainTxt());
        var d = {};
        var t = $('form').serializeArray();
        $.each(t, function () {
            d[this.name] = this.value;
            if(this.value == ''){
                //Add a red frame
                $('input[name='+this.name+']').addClass('is-invalid');
                //Add notice
                var msg = $('input[name='+this.name+']').prev().text();
                toastr.error(msg+'Cannot be Empty');
                return false;
            }
        });
        $.post('/admin/sendEmail', d, function (data) {
            if (data.code == 1) {
                toastr.success(data.msg);
                setTimeout(function () {
                    window.location.href = data.url;
                }, 1500);
            }else{
                toastr.error(data.msg);
            }
        });
    });

         </script>

 
         </form >
      </center>
</body>
</html>