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
        .row{
            background: white;
            border radius: 30px;
        }

        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
    </style>
</head>
<body>
    <nav>
        <div>
            <a href="<?php echo url('welcome')?>">Home Page</a>
        </div>
    </nav>
    
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                
                <div class="col-lg">

                    <img src="images/logo.jpg" class="img-fluid" alt="Logo">  

                </div>

                <div class="col-lg-7">
                    <form >
                        <div class= "form-row">
                            <div class="col-lg-7">
                                <label>Email</label>
                                <input class="form-control" name="email" type="text" placeholder="Email Address">
                            </div>
                        </div>

                        <div class= "form-row">
                            <div class="col-lg-7">
                                <label>Password</label>
                                <input class="form-control" name ="password" type="password"  placeholder="Password">
                            </div>
                        </div>

                        <div class= "form-row">
                            <div class="col-lg-7">
                                <button name= "submit" type="button" class="submit">Login</button>      
                            </div>
                        </div>
                        <a href="#">Forgot Password</a>
                    </form>
                </div>
            </div>
        </div>
    </section>      
</body>
</html>

