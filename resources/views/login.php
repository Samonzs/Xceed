<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body
        {
            background: rgb(219, 226, 226);
        }
        
        .row
        {
            background: white;
            border radius: 40px;
        }

        button{
            border: none;
            outline: none;
            height: 40px;
            width: 100%;
            background-color: navy;
            color: white;
            border-radius: 4px;

        }

        button:hover{
           background: white; 
           border: 1px solid;
           color: black;
        }
    </style>
</head>
<body>
    <center>
    <section class="Form my-4 mx-5">
        <div class="">
            <div class="">     
                <div class="col-lg-7">
                    
                <div class="col-lg">
                    <img src="images/logo.jpg" class="img-fluid" alt="Logo">  
                </div>
                <h3 class= "font-weight-bold py-3">Log in</h3>
                
                    <form >
                        <div class= "form-row">
                            <div class="col-lg-7">
                                <label>Email</label>
                                <input class="form-control" name="email" type="text" placeholder="Email Address">
                            </div>
                        </div>
                        <br>
                        <div class= "form-row">
                            <div class="col-lg-7">
                                <label>Password</label>
                                <input class="form-control" name ="password" type="password"  placeholder="Password">
                            </div>
                        </div>

                        <div class= "form-row">
                            <div class="col-lg-7">
                                <button name= "submit" type="submit" class="button mt-3" formaction ="<?php echo url('welcome')?>">Login</button>      
                            </div>
                        </div>
                        <br>
                        <a href="#"> Forgot Password?</a>
                    </form>
                </div>
            </div>
        </div>
    </section>  
    </center>    
</body>
</html>

