<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>XCEED Electrical Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
         
    </head>

   
    <body>
        <!-- {{print_r(URL(''))}} -->
    <header>     
    <nav class="navbar navbar-inverse">

     <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="welcome.blade.php">XCEED Electrical</a>
            <a href="welcome.blade.php" class="navbar-brand"></a>
            <!-- logo image located here -->
            <a href="welcome.blade.php" class = "navbar-brand"><img src="C:\xampp\htdocs\laravel\Xceed\public\images\logo.jpg" class="img-fluid" alt="Logo"></a>
            
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quoting <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">Create a Quote</a></li>
                <li><a href="#">List of Quotes</a></li>
            </ul>
            <!-- <li><a href="#">section 2</a></li>
            <li><a href="#">Section 3</a></li> -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <!-- The glyphicon is just a symbol to use that can be called through the css and js components of bootstrap -->
            <li><a href="CreateStaff.php"><span class="glyphicon glyphicon-user"></span> Create Staff</a></li>
            <li><a href="{{url('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
  </div>
</nav>
        </header>

                <h1>XCEED ELECTRICAL</h1>
                <h2>XCEED Electrical Quote Management system</h2>

            <section id="columb 1"> 
                <h3>Testimonials</h3>
                <p>Thank you Xceed Electrical for installing our new TV. Looking forward to getting our videos and resources playing for our community.<br id="test signiatures"> Western Sydney MRC</p>
                <p>We have been a customer of Xceed Electrical since 2013 and have always found them to be an excellent and efficient contractor. 
                They are very professional in their approach to any jobs they are asked to do and all jobs undertaken have been completed to an exceptionally high standard and they are always willing to visit site immediately if an emergency arises. I would have no hesitation in recommending Xceed Electrical for any electrical repairs or installations.<br> Mouna Diani</p>
                <p>Just want to give residents a heads up. Xceed Electrical has installed cameras, a doorbell, internet cables, downlights and power points for me. They are honest, reliable and really lovely guys. Don't hesitate to call if you want quality work. Jayson and his team are great. <br> Sallyanne Jean</p>
            </section>

            <!-- This will be a slideshow of the projects that xceed has done. permission will be asked before using their images. 
                This hence will show the projects that the comapny has done in a slide show that will alter images periodically-->
        


        <footer>
            <p>Copyright XCEED blah blah blah</p>  
        </footer>
    </body>

    <style>
        .btn-primary {
            color: #fff;
            background-color: #0495c9;
            border-color: #357ebd !important; /*set the color you want here*/
        }
    
        .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary {
            color: #fff;
            background-color: #00b3db;
            border-color: #285e8e !important; /*set the color you want here*/
    </style>
    
</html>