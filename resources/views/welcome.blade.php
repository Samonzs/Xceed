<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>XCEED Electrical Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/stylesheet.css">
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    </head>
    <body>
        <!-- {{print_r(URL(''))}} -->

        <img src="{{URL('images/logo.jpg')}}" class="img-fluid" alt="Logo">
        <header>
            <h1>XCEED ELECTRICAL</h1>

            <nav class = "navbar navbar-light navbar-expand-lg fixed-top shadow-sm bg-white">
                <button type = "button" data-toggle = "collapse" data-target = "#navbarOptions" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span>></button>
                <div id="navbarOptions" class="collapse navbar-collapse"></div>
                
                <ul class="navbar-nav ml-auto">
                    <li><a href="welcome.blade.php" class="nav-link">
                            <img src="{{URL('images/logo.jpg')}}" alt="Home Page Logo">
                        </a>
                    </li>
                    <li class="nav-item"> <a href="welcome.blade.php" class="nav-link">Home</a></li> <!-- we need to turn this 
                        section into a png of the xceed logo which will act as the home page-->
                    <li> <a href="listOfQuotes.php" class="nav-link">List of Quotes</a></li>
                    <li> <a href="{{URL('createquotes')}}" class="nav-link">Create Quotes</a></li>
                    <li> <a href="createStaff.php" class="nav-link">Create Staff</a></li>
                    <!-- <li><a href="{{url('login')}}" class="nav-link">Login</a></li> -->
                </ul>
                <!-- emphasised login button -->
                <div class="navbar-text ml-lg-3">
                    <a href="{{URL('login')}}" class="btn btn-primary text-white shadow">Login</a>
                </div>
            </nav>

        </header>
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
</html>