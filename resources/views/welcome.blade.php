<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">



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
    <script>
 
    </script>
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
                
                @if(isset(Auth::user()->email))
                    <script>window.location="/user/successlogin";</script>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                @endif

                    <form action="{{ url('user/checklogin') }}" method="post" >
                    {{ csrf_field() }}
    
                    <div class= "form-row">
                            <div class="col-lg-5">
                                <label>Email</label>
                                <input class="form-control" name="staff_email" placeholder="Email Address">
                                <span style="color:red">@error('staff_email'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <br>
                        <div class= "form-row">
                            <div class="col-lg-5">
                                <label>Password</label>
                                <input class="form-control" name ="password" type="password"  placeholder="Password">
                                <span style="color:red">@error('password'){{$message}}@enderror</span>
                            </div>
                        </div>

                        @if ($message = Session::get('error'))
                            <strong style="color:red">{{ $message }}</strong>
                        @endif

                        <div class= "form-row">
                            <div class="col-lg-5">
                            <button name= "submit" type="submit" class="button mt-3" >Login</button>      
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

